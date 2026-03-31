<?php

declare(strict_types=1);

/**
 * Lolzteam API Code Generator
 *
 * Generates PHP 8.1+ classes from OpenAPI 3.1.0 schemas:
 *   - Model classes (component schemas + inline response schemas)
 *   - Enum classes (backed string enums)
 *   - Client class with API group classes
 *
 * Usage:
 *   php codegen/generate.php --schema <path> --output-dir <dir> --api-name <Forum|Market>
 */

// ============================================================================
// CLI argument parsing
// ============================================================================

$opts = getopt('', ['schema:', 'output-dir:', 'api-name:']);
if (!isset($opts['schema'], $opts['output-dir'], $opts['api-name'])) {
    fwrite(STDERR, "Usage: php generate.php --schema <path> --output-dir <dir> --api-name <Forum|Market>\n");
    exit(1);
}

$schemaPath = $opts['schema'];
$outputDir  = rtrim($opts['output-dir'], '/');
$apiName    = $opts['api-name']; // 'Forum' or 'Market'

if (!in_array($apiName, ['Forum', 'Market'], true)) {
    fwrite(STDERR, "--api-name must be Forum or Market\n");
    exit(1);
}

if (!file_exists($schemaPath)) {
    fwrite(STDERR, "Schema file not found: $schemaPath\n");
    exit(1);
}

$spec = json_decode(file_get_contents($schemaPath), true, 512, JSON_THROW_ON_ERROR);

$baseNamespace = "Lolzteam\\Generated\\{$apiName}";
$modelsNs     = "{$baseNamespace}\\Models";
$enumsNs      = "{$baseNamespace}\\Enums";

$modelsDir = "{$outputDir}/Models";
$enumsDir  = "{$outputDir}/Enums";

@mkdir($modelsDir, 0755, true);
@mkdir($enumsDir, 0755, true);

// ============================================================================
// Utility functions
// ============================================================================

/** Track generated class names to avoid collisions */
$generatedClasses = [];
/** Track generated enum names */
$generatedEnums = [];
/** Map from $ref path to PHP class name */
$refToClass = [];
/** Accumulated model files to write */
$modelFiles = [];
/** Accumulated enum files to write */
$enumFiles = [];

/**
 * Resolve a $ref string to the actual schema definition.
 * Supports #/components/schemas/... and #/components/parameters/...
 */
function resolveRef(array $spec, string $ref, array &$visited = []): array
{
    if (isset($visited[$ref])) {
        return []; // cycle protection
    }
    $visited[$ref] = true;

    $parts = explode('/', ltrim($ref, '#/'));
    $current = $spec;
    foreach ($parts as $part) {
        $current = $current[$part] ?? null;
        if ($current === null) {
            return [];
        }
    }

    // If the resolved value itself has a $ref, resolve recursively
    if (isset($current['$ref'])) {
        return resolveRef($spec, $current['$ref'], $visited);
    }

    return $current;
}

/**
 * Resolve a schema, following $ref if present.
 */
function resolveSchema(array $spec, array $schema): array
{
    if (isset($schema['$ref'])) {
        $resolved = resolveRef($spec, $schema['$ref']);
        return $resolved;
    }
    return $schema;
}

/**
 * Convert a string to PascalCase.
 */
function toPascalCase(string|int $str): string
{
    $str = (string)$str;
    // Handle dot notation like OAuth.Token -> OAuthToken
    $str = str_replace('.', ' ', $str);
    // Handle snake_case, kebab-case, spaces
    $str = preg_replace('/[^a-zA-Z0-9]/', ' ', $str);
    return str_replace(' ', '', ucwords($str));
}

/**
 * Convert a string to camelCase.
 */
function toCamelCase(string $str): string
{
    $pascal = toPascalCase($str);
    return lcfirst($pascal);
}

/**
 * Make a valid PHP property name from a schema property key.
 */
function toPropertyName(string|int $key): string
{
    $key = (string)$key;
    // Remove [] suffix
    $key = rtrim($key, '[]');
    // If it starts with a digit, prefix with underscore
    $name = toCamelCase($key);
    if ($name === '' || ctype_digit($name[0])) {
        $name = '_' . $name;
    }
    // Reserved words
    $reserved = ['class', 'interface', 'abstract', 'final', 'list', 'match', 'default', 'switch', 'case', 'new', 'return', 'yield', 'function'];
    if (in_array(strtolower($name), $reserved, true)) {
        $name .= 'Value';
    }
    return $name;
}

/**
 * Map OpenAPI type(s) to PHP type hint.
 */
// API type mismatch overrides — real API returns different types than spec
// See fix_instructions.md for rationale.
const FIELD_TYPE_OVERRIDES = [
    // float overrides (spec says int, API returns float)
    'priceWithSellerFee' => 'float',
    'roblox_credit_balance' => 'float',
    // any/mixed overrides (spec type != real API type)
    'discord_nitro_type' => 'mixed',   // spec: integer, real: string "none"
    'instagram_id' => 'mixed',          // spec: string, real: integer
    'socialclub_games' => 'mixed',      // spec: list of objects, real: JSON string
    'steam_bans' => 'mixed',            // spec: string, real: dict/object
    'guarantee' => 'mixed',             // spec: boolean, real: object
    'cs2PremierElo' => 'mixed',         // spec: array, real: dict
    'base_params' => 'mixed',           // spec: object, real: list
    // dict-or-list fields (PHP API returns [] for empty, dict when populated)
    'thread_tags' => 'array|null',      // dict OR empty []
    'Skin' => 'mixed',                  // list[int] or dict
    'WeaponSkins' => 'mixed',           // list[str] or dict
    'supercellBrawlers' => 'mixed',     // list or dict
    'r6Skins' => 'mixed',              // list or dict
    'tags' => 'mixed',                  // list[str] / object / dict OR list
    'values' => 'mixed',                // list[str] or dict or list of objects
    // content_id can be int or string (e.g. "thread-12345")
    'content_id' => 'string|int',
    // autoBuyPrice can be int or false when disabled
    'autoBuyPrice' => 'int|bool',
    // Additional dynamic-keyed fields
    'feedback_data' => 'mixed',
    'imap_data' => 'mixed',
    'restore_data' => 'mixed',
    'telegram_client' => 'mixed',
    'backgrounds' => 'mixed',
    'steam_full_games' => 'mixed',
];

/**
 * Detect if an object schema is actually a dynamic dictionary.
 * Returns true when ALL property keys in the schema are purely numeric (digits only),
 * meaning the schema was generated from example data with IDs as keys.
 */
function isDynamicDict(array $schema): bool
{
    if (($schema['type'] ?? '') !== 'object' && empty($schema['properties'])) {
        return false;
    }
    $properties = $schema['properties'] ?? [];
    if (empty($properties)) {
        return false;
    }
    foreach ($properties as $key => $value) {
        if (!ctype_digit((string)$key)) {
            return false;
        }
    }
    return true;
}

function mapType(array $spec, array $schema, string $context, string $parentClass): array
{
    global $refToClass, $modelsNs, $enumsNs, $generatedEnums;

    // Handle $ref
    if (isset($schema['$ref'])) {
        $refPath = $schema['$ref'];
        // Check if the referenced schema is a dynamic dict
        $refResolved = resolveRef($spec, $refPath);
        if (isDynamicDict($refResolved)) {
            return [
                'type' => 'mixed',
                'phpDoc' => 'mixed',
                'isModel' => false,
                'isArray' => false,
                'isEnum' => false,
            ];
        }
        $className = getRefClassName($refPath);
        return [
            'type' => "\\{$modelsNs}\\{$className}",
            'phpDoc' => "\\{$modelsNs}\\{$className}",
            'isModel' => true,
            'modelClass' => $className,
            'isArray' => false,
            'isEnum' => false,
        ];
    }

    $type = $schema['type'] ?? 'mixed';
    $format = $schema['format'] ?? null;
    $enumValues = $schema['enum'] ?? null;

    // Handle multi-type arrays like ["string", "integer"]
    if (is_array($type)) {
        $types = array_filter($type, fn($t) => $t !== 'null');
        $hasNull = in_array('null', $type, true);
        $phpTypes = array_map(fn($t) => mapSimpleType($t, $format), $types);
        $phpType = implode('|', array_unique($phpTypes));
        if ($hasNull) {
            $phpType .= '|null';
        }
        return [
            'type' => $phpType,
            'phpDoc' => $phpType,
            'isModel' => false,
            'isArray' => false,
            'isEnum' => false,
        ];
    }

    // Handle enum
    if ($enumValues !== null && $type === 'string') {
        // We'll generate enum inline later
        return [
            'type' => 'string',
            'phpDoc' => 'string',
            'isModel' => false,
            'isArray' => false,
            'isEnum' => true,
            'enumValues' => $enumValues,
        ];
    }

    // Handle array type
    if ($type === 'array') {
        $items = $schema['items'] ?? [];
        if (!empty($items)) {
            $items = resolveSchema($spec, $items);
            // If array items are a dynamic dict (all-numeric keys), emit mixed
            // because PHP APIs serialize numeric-keyed arrays as either JSON objects or JSON arrays
            if (isDynamicDict($items)) {
                return [
                    'type' => 'mixed',
                    'phpDoc' => 'mixed',
                    'isModel' => false,
                    'isArray' => false,
                    'isEnum' => false,
                ];
            }
            if (($items['type'] ?? '') === 'object' && !empty($items['properties'])) {
                // Inline object array - generate a model
                $itemClassName = $context . 'Item';
                generateModelClass($spec, $items, $itemClassName, $parentClass);
                return [
                    'type' => 'array',
                    'phpDoc' => "\\{$modelsNs}\\{$itemClassName}[]",
                    'isModel' => false,
                    'isArray' => true,
                    'itemModelClass' => $itemClassName,
                    'isEnum' => false,
                ];
            }
            if (isset($items['$ref'])) {
                $refClass = getRefClassName($items['$ref']);
                return [
                    'type' => 'array',
                    'phpDoc' => "\\{$modelsNs}\\{$refClass}[]",
                    'isModel' => false,
                    'isArray' => true,
                    'itemModelClass' => $refClass,
                    'isEnum' => false,
                ];
            }
        }
        return [
            'type' => 'array',
            'phpDoc' => 'array',
            'isModel' => false,
            'isArray' => true,
            'isEnum' => false,
        ];
    }

    // Handle inline object
    if ($type === 'object' && !empty($schema['properties'])) {
        // Dynamic dict detection: if ALL property keys are numeric, this is example data
        // from a dict keyed by IDs. Emit mixed/array instead of a typed model.
        if (isDynamicDict($schema)) {
            return [
                'type' => 'mixed',
                'phpDoc' => 'mixed',
                'isModel' => false,
                'isArray' => false,
                'isEnum' => false,
            ];
        }
        $nestedClass = $context;
        generateModelClass($spec, $schema, $nestedClass, $parentClass);
        return [
            'type' => "\\{$modelsNs}\\{$nestedClass}",
            'phpDoc' => "\\{$modelsNs}\\{$nestedClass}",
            'isModel' => true,
            'modelClass' => $nestedClass,
            'isArray' => false,
            'isEnum' => false,
        ];
    }

    // Simple type
    $phpType = mapSimpleType($type, $format);
    return [
        'type' => $phpType,
        'phpDoc' => $phpType,
        'isModel' => false,
        'isArray' => false,
        'isEnum' => false,
    ];
}

function mapSimpleType(string $type, ?string $format = null): string
{
    if ($format === 'binary') {
        return 'string';
    }
    return match ($type) {
        'integer' => 'int',
        'number'  => 'float',
        'boolean' => 'bool',
        'string'  => 'string',
        'object'  => 'array',
        'array'   => 'array',
        default   => 'mixed',
    };
}

/**
 * Get PHP class name from a $ref path.
 */
function getRefClassName(string $ref): string
{
    global $refToClass;
    if (isset($refToClass[$ref])) {
        return $refToClass[$ref];
    }
    $parts = explode('/', $ref);
    $name = end($parts);
    $className = toPascalCase($name);
    $refToClass[$ref] = $className;
    return $className;
}

/**
 * Deduplicate a class name.
 */
function uniqueClassName(string $name): string
{
    global $generatedClasses;
    $original = $name;
    $i = 1;
    while (isset($generatedClasses[$name])) {
        $i++;
        $name = $original . $i;
    }
    $generatedClasses[$name] = true;
    return $name;
}

// ============================================================================
// Model class generation
// ============================================================================

/**
 * Generate a model class from an object schema.
 */
function generateModelClass(array $spec, array $schema, string $className, string $parentContext = ''): string
{
    global $generatedClasses, $modelFiles, $modelsNs, $modelsDir;

    // Avoid regenerating
    if (isset($generatedClasses[$className])) {
        return $className;
    }
    $generatedClasses[$className] = true;

    $properties = $schema['properties'] ?? [];
    if (empty($properties)) {
        // No properties - generate a simple wrapper
        $code = generateEmptyModelCode($className);
        $modelFiles[$className] = $code;
        return $className;
    }

    // Dynamic dict detection: if ALL property keys are numeric, this schema was generated
    // from example data. Generate a simple array wrapper instead of typed properties.
    if (isDynamicDict($schema)) {
        $code = generateEmptyModelCode($className);
        $modelFiles[$className] = $code;
        return $className;
    }

    $propDefs = [];
    $fromArrayLines = [];
    $toArrayLines = [];
    $constructorParams = [];
    $phpDocProps = [];
    $usedPropNames = [];

    foreach ($properties as $key => $propSchema) {
        $key = (string)$key;
        $propName = toPropertyName($key);

        // Skip duplicate PHP property names (two schema keys map to same name)
        if (isset($usedPropNames[$propName])) {
            continue;
        }
        $usedPropNames[$propName] = true;
        $propSchema = resolveSchema($spec, $propSchema);
        $description = $propSchema['description'] ?? $propSchema['title'] ?? '';

        // Determine context name for nested classes
        $nestedContext = $className . toPascalCase($key);

        // Apply field-level type overrides for API mismatches
        if (isset(FIELD_TYPE_OVERRIDES[$key])) {
            $phpType = FIELD_TYPE_OVERRIDES[$key];
            $typeInfo = ['type' => $phpType, 'phpDoc' => $phpType, 'isArray' => false, 'isModel' => false];
        } else {
            $typeInfo = mapType($spec, $propSchema, $nestedContext, $className);
            $phpType = $typeInfo['type'];
        }
        $phpDoc = $typeInfo['phpDoc'];

        // All properties are nullable due to API returning incomplete objects
        $nullableType = str_contains($phpType, '|null') ? $phpType : $phpType . '|null';
        if ($phpType === 'mixed') {
            $nullableType = 'mixed';
        }

        // Constructor param
        $constructorParams[] = [
            'name' => $propName,
            'type' => $nullableType,
            'phpDoc' => $phpDoc,
            'description' => $description,
            'key' => $key,
        ];

        // fromArray conversion
        $fromArrayExpr = buildFromArrayExpr($spec, $propSchema, $typeInfo, "\$data['" . addslashes($key) . "']", $nestedContext);
        $fromArrayLines[] = "            {$propName}: {$fromArrayExpr},";

        // toArray conversion
        $toArrayExpr = buildToArrayExpr($propName, $typeInfo);
        $toArrayLines[] = "            '" . addslashes($key) . "' => {$toArrayExpr},";

        // PHPDoc
        if ($typeInfo['isArray'] && isset($typeInfo['itemModelClass'])) {
            $phpDocProps[] = " * @property-read {$phpDoc}|null \${$propName} {$description}";
        }
    }

    // Build class code
    $code = "<?php\n\ndeclare(strict_types=1);\n\nnamespace {$modelsNs};\n\nuse JsonSerializable;\n\n";

    // Class PHPDoc
    $code .= "/**\n";
    $code .= " * Auto-generated model class.\n";
    foreach ($phpDocProps as $doc) {
        $code .= "{$doc}\n";
    }
    $code .= " */\n";

    $code .= "class {$className} implements JsonSerializable\n{\n";

    // Constructor with promoted readonly properties
    $code .= "    public function __construct(\n";
    foreach ($constructorParams as $i => $param) {
        $comma = ($i < count($constructorParams) - 1) ? ',' : ',';
        $desc = $param['description'] ? " // " . str_replace("\n", ' ', $param['description']) : '';
        $code .= "        public readonly {$param['type']} \${$param['name']} = null,{$desc}\n";
    }
    $code .= "    ) {}\n\n";

    // fromArray factory
    $code .= "    public static function fromArray(array \$data): static\n";
    $code .= "    {\n";
    $code .= "        return new static(\n";
    foreach ($fromArrayLines as $line) {
        $code .= "{$line}\n";
    }
    $code .= "        );\n";
    $code .= "    }\n\n";

    // toArray method
    $code .= "    public function toArray(): array\n";
    $code .= "    {\n";
    $code .= "        return array_filter([\n";
    foreach ($toArrayLines as $line) {
        $code .= "{$line}\n";
    }
    $code .= "        ], static fn(\$v) => \$v !== null);\n";
    $code .= "    }\n\n";

    // jsonSerialize
    $code .= "    public function jsonSerialize(): array\n";
    $code .= "    {\n";
    $code .= "        return \$this->toArray();\n";
    $code .= "    }\n";

    $code .= "}\n";

    $modelFiles[$className] = $code;
    return $className;
}

function generateEmptyModelCode(string $className): string
{
    global $modelsNs;
    return <<<PHP
<?php

declare(strict_types=1);

namespace {$modelsNs};

use JsonSerializable;

/**
 * Auto-generated model class.
 */
class {$className} implements JsonSerializable
{
    public function __construct(
        public readonly array \$data = [],
    ) {}

    public static function fromArray(array \$data): static
    {
        return new static(data: \$data);
    }

    public function toArray(): array
    {
        return \$this->data;
    }

    public function jsonSerialize(): array
    {
        return \$this->toArray();
    }
}

PHP;
}

/**
 * Build the expression used in fromArray() for a given property.
 */
function buildFromArrayExpr(array $spec, array $propSchema, array $typeInfo, string $accessor, string $context): string
{
    $nullSafe = str_replace("\$data['", "(\$data['", $accessor) . "'] ?? null)";
    // Fix: we need $data['key'] ?? null
    $safeAccess = $accessor . ' ?? null';

    if ($typeInfo['isModel'] && isset($typeInfo['modelClass'])) {
        $cls = $typeInfo['modelClass'];
        // Handle empty array from PHP API: [] should be treated as null for object fields
        return "isset({$accessor}) && is_array({$accessor}) && !empty({$accessor}) ? \\{$GLOBALS['modelsNs']}\\{$cls}::fromArray({$accessor}) : null";
    }

    if ($typeInfo['isArray'] && isset($typeInfo['itemModelClass'])) {
        $cls = $typeInfo['itemModelClass'];
        // Handle empty array gracefully - still pass it through (empty list is fine)
        return "isset({$accessor}) && is_array({$accessor}) ? array_map(static fn(array \$item) => \\{$GLOBALS['modelsNs']}\\{$cls}::fromArray(\$item), {$accessor}) : null";
    }

    if ($typeInfo['isArray']) {
        return "{$safeAccess}";
    }

    return "{$safeAccess}";
}

/**
 * Build the expression used in toArray() for a given property.
 */
function buildToArrayExpr(string $propName, array $typeInfo): string
{
    if ($typeInfo['isModel']) {
        return "\$this->{$propName}?->toArray()";
    }
    if ($typeInfo['isArray'] && isset($typeInfo['itemModelClass'])) {
        return "\$this->{$propName} !== null ? array_map(static fn(\$item) => \$item instanceof \JsonSerializable ? \$item->toArray() : \$item, \$this->{$propName}) : null";
    }
    return "\$this->{$propName}";
}

// ============================================================================
// Enum generation
// ============================================================================

/**
 * Generate or retrieve an enum class name for given values.
 * Returns the fully qualified class name.
 */
function generateEnum(string $name, array $values): string
{
    global $generatedEnums, $enumFiles, $enumsNs;

    $className = toPascalCase($name) . 'Enum';

    // Check if we already generated an identical enum
    $valKey = implode('|', $values);
    foreach ($generatedEnums as $existing => $existingVals) {
        if ($existingVals === $valKey) {
            return $existing;
        }
    }

    // Deduplicate name
    $origClassName = $className;
    $i = 1;
    while (isset($generatedEnums[$className])) {
        $i++;
        $className = $origClassName . $i;
    }
    $generatedEnums[$className] = $valKey;

    // Generate enum code
    $code = "<?php\n\ndeclare(strict_types=1);\n\nnamespace {$enumsNs};\n\n";
    $code .= "/**\n * Auto-generated enum.\n */\n";
    $code .= "enum {$className}: string\n{\n";

    $usedCaseNames = [];
    foreach ($values as $value) {
        $caseName = strtoupper(preg_replace('/[^a-zA-Z0-9_]/', '_', (string)$value));
        if ($caseName === '' || ctype_digit($caseName[0])) {
            $caseName = 'V_' . $caseName;
        }
        // Deduplicate case names
        $origCase = $caseName;
        $ci = 1;
        while (isset($usedCaseNames[$caseName])) {
            $ci++;
            $caseName = $origCase . '_' . $ci;
        }
        $usedCaseNames[$caseName] = true;

        $escapedValue = addslashes((string)$value);
        $code .= "    case {$caseName} = '{$escapedValue}';\n";
    }

    $code .= "}\n";

    $enumFiles[$className] = $code;
    return $className;
}

// ============================================================================
// Phase 1: Generate component schema models
// ============================================================================

echo "[codegen] Generating models for {$apiName} API...\n";

$componentSchemas = $spec['components']['schemas'] ?? [];
foreach ($componentSchemas as $schemaName => $schema) {
    $className = toPascalCase($schemaName);
    $refToClass["#/components/schemas/{$schemaName}"] = $className;

    $type = $schema['type'] ?? null;
    $enumValues = $schema['enum'] ?? null;

    // Enum-type component schema
    if ($enumValues !== null && ($type === 'string' || $type === 'integer')) {
        generateEnum($schemaName, array_map('strval', $enumValues));
        continue;
    }

    // Simple scalar type (like UserIDModel which is ["string","integer"])
    if (is_array($type) || (is_string($type) && $type !== 'object')) {
        // Generate a type alias / simple model
        // Skip - these are used inline as types
        continue;
    }

    // Object type
    if ($type === 'object' || (!$type && !empty($schema['properties']))) {
        generateModelClass($spec, $schema, $className);
    }
}

// ============================================================================
// Phase 1.5: Generate SaveChangesResponse fallback model
// ============================================================================

// This model is used for endpoints with no response schema defined.
// The API always returns {"status": "ok", "message": "...", "system_info": {...}}
$saveChangesSchema = [
    'properties' => [
        'status' => ['type' => 'string', 'description' => 'Status of the operation'],
        'message' => ['type' => 'string', 'description' => 'Response message'],
        'system_info' => ['$ref' => '#/components/schemas/Resp_SystemInfo'],
    ],
];
generateModelClass($spec, $saveChangesSchema, 'SaveChangesResponse');
echo "  -> SaveChangesResponse (fallback for untyped endpoints)\n";

// ============================================================================
// Phase 2: Generate response models and client methods
// ============================================================================

/** Collect API methods grouped by tag */
$apiGroups = [];

$paths = $spec['paths'] ?? [];
foreach ($paths as $path => $pathItem) {
    foreach ($pathItem as $httpMethod => $operation) {
        if (!in_array($httpMethod, ['get', 'post', 'put', 'delete', 'patch'], true)) {
            continue;
        }

        $operationId = $operation['operationId'] ?? '';
        $tags = $operation['tags'] ?? ['Default'];
        $tag = $tags[0] ?? 'Default';
        $summary = $operation['summary'] ?? '';
        $description = $operation['description'] ?? $summary;

        // Determine method name from operationId
        // e.g. "Threads.List" -> method "list", group "Threads"
        // For multi-level like "Conversations.Messages.List" -> method "messagesList"
        $opParts = explode('.', $operationId);
        if (count($opParts) > 2) {
            // Use all parts after the first (tag) as the method name
            $methodNameParts = array_slice($opParts, 1);
            $methodName = toCamelCase(implode('_', $methodNameParts));
        } else {
            $methodName = toCamelCase(end($opParts));
        }

        // Check if search endpoint
        $isSearch = str_contains(strtolower($operationId), 'search');

        // Collect parameters
        $params = [];
        $pathParams = [];
        $queryParams = [];
        $bodyParams = [];
        $bodyContentType = null;

        // Resolve parameter refs
        $rawParams = $operation['parameters'] ?? [];
        foreach ($rawParams as $param) {
            if (isset($param['$ref'])) {
                $param = resolveRef($spec, $param['$ref']);
                if (empty($param)) continue;
            }
            $paramSchema = $param['schema'] ?? [];
            if (isset($paramSchema['$ref'])) {
                $paramSchema = resolveRef($spec, $paramSchema['$ref']);
            }

            $pName = $param['name'] ?? '';
            $pIn = $param['in'] ?? 'query';
            $pRequired = $param['required'] ?? false;
            $pDescription = $param['description'] ?? '';
            $pStyle = $param['style'] ?? 'form';
            $pType = $paramSchema['type'] ?? 'string';
            $pFormat = $paramSchema['format'] ?? null;
            $pEnum = $paramSchema['enum'] ?? null;

            // Map type
            $phpType = 'mixed';
            if (is_array($pType)) {
                $types = array_filter($pType, fn($t) => $t !== 'null');
                $phpType = implode('|', array_map(fn($t) => mapSimpleType($t, $pFormat), $types));
            } else {
                $phpType = mapSimpleType($pType, $pFormat);
            }

            if ($pFormat === 'binary') {
                $phpType = 'string';
            }

            // Array param
            if ($pType === 'array') {
                $phpType = 'array';
            }

            $paramInfo = [
                'name' => $pName,
                'phpName' => toPropertyName($pName),
                'in' => $pIn,
                'required' => $pRequired,
                'description' => $pDescription,
                'type' => $phpType,
                'style' => $pStyle,
                'format' => $pFormat,
                'enum' => $pEnum,
                'schema' => $paramSchema,
                'isDeepObject' => $pStyle === 'deepObject',
            ];

            if ($pIn === 'path') {
                $pathParams[] = $paramInfo;
            } else {
                $queryParams[] = $paramInfo;
            }
            $params[] = $paramInfo;

            // Generate enum if applicable
            if ($pEnum !== null && $pType === 'string') {
                generateEnum($pName, array_map('strval', $pEnum));
            }
        }

        // Request body
        $requestBody = $operation['requestBody'] ?? null;
        $hasMultipart = false;
        if ($requestBody) {
            $content = $requestBody['content'] ?? [];
            if (isset($content['multipart/form-data'])) {
                $bodyContentType = 'multipart/form-data';
                $hasMultipart = true;
                $bodySchema = $content['multipart/form-data']['schema'] ?? [];
            } elseif (isset($content['application/json'])) {
                $bodyContentType = 'application/json';
                $bodySchema = $content['application/json']['schema'] ?? [];
            } else {
                // Take first content type
                $bodyContentType = array_key_first($content) ?? 'application/json';
                $bodySchema = $content[$bodyContentType]['schema'] ?? [];
            }

            // Handle oneOf in body schema (like OAuth token)
            if (isset($bodySchema['oneOf'])) {
                // Merge all oneOf properties
                $mergedProps = [];
                foreach ($bodySchema['oneOf'] as $variant) {
                    $variant = resolveSchema($spec, $variant);
                    foreach ($variant['properties'] ?? [] as $k => $v) {
                        $mergedProps[$k] = $v;
                    }
                }
                $bodySchema = ['type' => 'object', 'properties' => $mergedProps];
            }

            // Check if body schema is an array (e.g. batch endpoints)
            $bodySchemaResolved = resolveSchema($spec, $bodySchema);
            $isArrayBody = ($bodySchemaResolved['type'] ?? '') === 'array';

            // Extract body params (skip for array body schemas)
            if (!$isArrayBody)
            foreach ($bodySchemaResolved['properties'] ?? [] as $bpName => $bpSchema) {
                $bpSchema = resolveSchema($spec, $bpSchema);
                $bpType = $bpSchema['type'] ?? 'string';
                $bpFormat = $bpSchema['format'] ?? null;
                $bpEnum = $bpSchema['enum'] ?? null;

                $phpType = 'mixed';
                if (is_array($bpType)) {
                    $types = array_filter($bpType, fn($t) => $t !== 'null');
                    $phpType = implode('|', array_map(fn($t) => mapSimpleType($t, $bpFormat), $types));
                } else {
                    $phpType = mapSimpleType($bpType, $bpFormat);
                }

                if ($bpFormat === 'binary') {
                    $phpType = 'string';
                }
                if ($bpType === 'array') {
                    $phpType = 'array';
                }

                $bpRequired = in_array($bpName, $bodySchemaResolved['required'] ?? [], true);

                $bodyParams[] = [
                    'name' => $bpName,
                    'phpName' => toPropertyName($bpName),
                    'in' => 'body',
                    'required' => $bpRequired,
                    'description' => $bpSchema['description'] ?? $bpSchema['title'] ?? '',
                    'type' => $phpType,
                    'format' => $bpFormat,
                    'enum' => $bpEnum,
                    'schema' => $bpSchema,
                    'isDeepObject' => false,
                ];

                // Generate enum if applicable
                if ($bpEnum !== null && $bpType === 'string') {
                    generateEnum($bpName, array_map('strval', $bpEnum));
                }
            }
        }

        // Generate response model
        $responseClassName = null;
        $responseIsText = false;
        $responses = $operation['responses'] ?? [];
        $successResponse = $responses['200'] ?? $responses['201'] ?? $responses['204'] ?? null;
        if ($successResponse) {
            $responseContent = $successResponse['content'] ?? [];
            // Detect text/html responses (e.g. file downloads, steam preview)
            if (isset($responseContent['text/html']) && !isset($responseContent['application/json'])) {
                $responseIsText = true;
            } else {
                $jsonResponse = $responseContent['application/json'] ?? null;
                if ($jsonResponse) {
                    $responseSchema = $jsonResponse['schema'] ?? [];
                    $responseSchemaResolved = resolveSchema($spec, $responseSchema);

                    if (!empty($responseSchemaResolved['properties']) || isset($responseSchema['$ref'])) {
                        // Build response class name from operationId
                        $responseClassName = toPascalCase($operationId) . 'Response';
                        if (!isset($generatedClasses[$responseClassName])) {
                            generateModelClass($spec, $responseSchemaResolved, $responseClassName);
                        }
                    }
                }
            }
        }

        // Fallback: endpoints with no response schema use SaveChangesResponse
        if ($responseClassName === null && !$responseIsText) {
            $responseClassName = 'SaveChangesResponse';
        }

        // Store method info
        $apiGroups[$tag][] = [
            'operationId' => $operationId,
            'methodName' => $methodName,
            'httpMethod' => strtoupper($httpMethod),
            'path' => $path,
            'summary' => $summary,
            'description' => $description,
            'pathParams' => $pathParams,
            'queryParams' => $queryParams,
            'bodyParams' => $bodyParams,
            'bodyContentType' => $bodyContentType,
            'hasMultipart' => $hasMultipart,
            'isSearch' => $isSearch,
            'responseClass' => $responseClassName,
            'allParams' => array_merge($pathParams, $queryParams, $bodyParams),
            'security' => $operation['security'] ?? [],
            'isArrayBody' => $isArrayBody ?? false,
            'responseIsText' => $responseIsText,
        ];
    }
}

// ============================================================================
// Phase 3: Generate API group classes and main client
// ============================================================================

echo "[codegen] Generating client classes...\n";

//// Generate HttpClientInterface
//$httpClientCode = <<<PHP
//<?php
//
//declare(strict_types=1);
//
//namespace {$baseNamespace};
//
//interface HttpClientInterface
//{
//    /**
//     * Send an HTTP request.
//     *
//     * @param string \$method HTTP method (GET, POST, PUT, DELETE, PATCH)
//     * @param string \$path   Request path
//     * @param array  \$options Request options:
//     *   - 'params'    => array  Query parameters
//     *   - 'json'      => array  JSON body data
//     *   - 'multipart' => array  Multipart form data
//     *   - 'isSearch'  => bool   Whether this is a search endpoint
//     * @return array Decoded JSON response
//     */
//    public function request(string \$method, string \$path, array \$options = []): array;
//}
//
//PHP;
//
//file_put_contents("{$outputDir}/HttpClientInterface.php", $httpClientCode);
//echo "  -> HttpClientInterface.php\n";

// Generate API group classes
$groupProperties = [];

foreach ($apiGroups as $tag => $methods) {
    $groupClassName = toPascalCase($tag) . 'Api';
    $groupPropertyName = toCamelCase($tag);

    $groupProperties[] = [
        'className' => $groupClassName,
        'propertyName' => $groupPropertyName,
        'tag' => $tag,
    ];

    $code = "<?php\n\ndeclare(strict_types=1);\n\nnamespace {$baseNamespace};\n\n";

    // Collect use statements
    $useStatements = [];
    foreach ($methods as $method) {
        if ($method['responseClass']) {
            $useStatements["use {$modelsNs}\\{$method['responseClass']};\n"] = true;
        }
    }
    foreach ($useStatements as $use => $_) {
        $code .= $use;
    }
    if (!empty($useStatements)) {
        $code .= "\n";
    }

    $code .= "/**\n * {$tag} API group.\n */\n";
    $code .= "class {$groupClassName}\n{\n";
    $code .= "    public function __construct(\n";
    $code .= "        private readonly \Lolzteam\Runtime\HttpClientInterface \$httpClient,\n";
    $code .= "    ) {}\n";

    foreach ($methods as $method) {
        $code .= "\n";
        $code .= generateApiMethod($method);
    }

    $code .= "}\n";

    file_put_contents("{$outputDir}/{$groupClassName}.php", $code);
    echo "  -> {$groupClassName}.php\n";
}

// Generate main client class
$clientClassName = "{$apiName}Client";
$clientCode = "<?php\n\ndeclare(strict_types=1);\n\nnamespace {$baseNamespace};\n\n";
$clientCode .= "/**\n * {$apiName} API Client.\n *\n * Auto-generated from OpenAPI specification.\n */\n";
$clientCode .= "class {$clientClassName}\n{\n";

// Properties
foreach ($groupProperties as $group) {
    $clientCode .= "    public readonly {$group['className']} \${$group['propertyName']};\n";
}
$clientCode .= "\n";

// Constructor
$clientCode .= "    public function __construct(\n";
$clientCode .= "        private readonly \Lolzteam\Runtime\HttpClientInterface \$httpClient,\n";
$clientCode .= "    ) {\n";
foreach ($groupProperties as $group) {
    $clientCode .= "        \$this->{$group['propertyName']} = new {$group['className']}(\$this->httpClient);\n";
}
$clientCode .= "    }\n";
$clientCode .= "}\n";

file_put_contents("{$outputDir}/{$clientClassName}.php", $clientCode);
echo "  -> {$clientClassName}.php\n";

// ============================================================================
// Phase 4: Write all model and enum files
// ============================================================================

echo "[codegen] Writing model files...\n";
foreach ($modelFiles as $className => $code) {
    file_put_contents("{$modelsDir}/{$className}.php", $code);
    echo "  -> Models/{$className}.php\n";
}

echo "[codegen] Writing enum files...\n";
foreach ($enumFiles as $className => $code) {
    file_put_contents("{$enumsDir}/{$className}.php", $code);
    echo "  -> Enums/{$className}.php\n";
}

// ============================================================================
// Summary
// ============================================================================

$totalModels = count($modelFiles);
$totalEnums = count($enumFiles);
$totalGroups = count($groupProperties);
$totalMethods = array_sum(array_map('count', $apiGroups));

echo "\n[codegen] Generation complete!\n";
echo "  Models: {$totalModels}\n";
echo "  Enums:  {$totalEnums}\n";
echo "  API Groups: {$totalGroups}\n";
echo "  API Methods: {$totalMethods}\n";
echo "  Client: {$clientClassName}\n";

// ============================================================================
// Helper: Generate a single API method
// ============================================================================

function generateApiMethod(array $method): string
{
    global $modelsNs;

    $methodName = $method['methodName'];
    $httpMethod = $method['httpMethod'];
    $path = $method['path'];
    $summary = $method['summary'];
    $description = $method['description'];
    $responseClass = $method['responseClass'];
    $isSearch = $method['isSearch'];
    $hasMultipart = $method['hasMultipart'];
    $bodyContentType = $method['bodyContentType'];
    $pathParams = $method['pathParams'];
    $queryParams = $method['queryParams'];
    $bodyParams = $method['bodyParams'];
    $isArrayBody = $method['isArrayBody'] ?? false;
    $responseIsText = $method['responseIsText'] ?? false;

    $allParams = [];
    // Path params first (required)
    foreach ($pathParams as $p) {
        $allParams[] = array_merge($p, ['isPath' => true, 'isQuery' => false, 'isBody' => false]);
    }
    // Required params next
    foreach ($queryParams as $p) {
        if ($p['required']) {
            $allParams[] = array_merge($p, ['isPath' => false, 'isQuery' => true, 'isBody' => false]);
        }
    }
    foreach ($bodyParams as $p) {
        if ($p['required']) {
            $allParams[] = array_merge($p, ['isPath' => false, 'isQuery' => false, 'isBody' => true]);
        }
    }
    // Optional params
    foreach ($queryParams as $p) {
        if (!$p['required']) {
            $allParams[] = array_merge($p, ['isPath' => false, 'isQuery' => true, 'isBody' => false]);
        }
    }
    foreach ($bodyParams as $p) {
        if (!$p['required']) {
            $allParams[] = array_merge($p, ['isPath' => false, 'isQuery' => false, 'isBody' => true]);
        }
    }

    // Deduplicate param php names
    $usedNames = [];
    foreach ($allParams as &$p) {
        $origName = $p['phpName'];
        $i = 1;
        while (isset($usedNames[$p['phpName']])) {
            $i++;
            $p['phpName'] = $origName . $i;
        }
        $usedNames[$p['phpName']] = true;
    }
    unset($p);

    // PHPDoc
    $code = "    /**\n";
    $code .= "     * {$summary}\n";
    if ($description && $description !== $summary) {
        $code .= "     *\n";
        foreach (explode("\n", $description) as $dLine) {
            $code .= "     * " . trim($dLine) . "\n";
        }
    }
    $code .= "     *\n";
    $code .= "     * @endpoint {$httpMethod} {$path}\n";
    if ($isArrayBody) {
        $code .= "     * @param array \$jobs Array of batch job objects with keys: id (string, optional), uri (string, required), method (string, optional), params (array, optional).\n";
    }
    foreach ($allParams as $p) {
        $pDesc = str_replace("\n", ' ', $p['description']);
        $code .= "     * @param {$p['type']}|null \${$p['phpName']} {$pDesc}\n";
    }
    if ($responseIsText) {
        $code .= "     * @return string\n";
    } elseif ($responseClass) {
        $code .= "     * @return \\{$modelsNs}\\{$responseClass}\n";
    } else {
        $code .= "     * @return array\n";
    }
    $code .= "     */\n";

    // Method signature
    if ($responseIsText) {
        $returnType = 'string';
    } elseif ($responseClass) {
        $returnType = "\\{$modelsNs}\\{$responseClass}";
    } else {
        $returnType = 'array';
    }
    $code .= "    public function {$methodName}(\n";

    // For array body schemas (e.g. batch), add a jobs parameter
    if ($isArrayBody) {
        $code .= "        array \$jobs,\n";
    }

    foreach ($allParams as $i => $p) {
        $isRequired = $p['required'] && ($p['isPath'] ?? false);
        $paramType = $p['type'];

        if ($isRequired) {
            $code .= "        {$paramType} \${$p['phpName']},\n";
        } else {
            $defaultVal = 'null';
            $paramType = "{$paramType}|null";
            $code .= "        {$paramType} \${$p['phpName']} = {$defaultVal},\n";
        }
    }

    $code .= "    ): {$returnType} {\n";

    // Build path with substitutions
    $pathExpr = "'{$path}'";
    foreach ($pathParams as $p) {
        $placeholder = '{' . $p['name'] . '}';
        $pathExpr = str_replace($placeholder, "' . rawurlencode((string)\${$p['phpName']}) . '", $pathExpr);
    }
    // Clean up trailing . ''
    $pathExpr = preg_replace("/\s*\.\s*''$/", '', $pathExpr);
    if ($pathExpr === "'") {
        $pathExpr = "'/'";
    }

    $code .= "        \$path = {$pathExpr};\n";
    $code .= "        \$options = [];\n";

    // Query params
    $hasQueryParams = !empty($queryParams);
    if ($hasQueryParams) {
        $code .= "        \$params = [];\n";
        foreach ($queryParams as $p) {
            $phpN = $p['phpName'];
            $apiN = addslashes($p['name']);
            if ($p['isDeepObject'] ?? false) {
                $code .= "        if (\${$phpN} !== null) {\n";
                $code .= "            foreach (\${$phpN} as \$k => \$v) {\n";
                $code .= "                \$params['{$apiN}[' . \$k . ']'] = \$v;\n";
                $code .= "            }\n";
                $code .= "        }\n";
            } else {
                $code .= "        if (\${$phpN} !== null) {\n";
                $code .= "            \$params['{$apiN}'] = \${$phpN};\n";
                $code .= "        }\n";
            }
        }
        $code .= "        if (!empty(\$params)) {\n";
        $code .= "            \$options['params'] = \$params;\n";
        $code .= "        }\n";
    }

    // Array body (e.g. batch endpoints)
    if ($isArrayBody) {
        $code .= "        \$options['json'] = \$jobs;\n";
    }

    // Body params
    if (!$isArrayBody && !empty($bodyParams)) {
        if ($hasMultipart) {
            $code .= "        \$multipart = [];\n";
            foreach ($bodyParams as $p) {
                $phpN = $p['phpName'];
                $apiN = addslashes($p['name']);
                $code .= "        if (\${$phpN} !== null) {\n";
                $code .= "            \$multipart['{$apiN}'] = \${$phpN};\n";
                $code .= "        }\n";
            }
            $code .= "        if (!empty(\$multipart)) {\n";
            $code .= "            \$options['multipart'] = \$multipart;\n";
            $code .= "        }\n";
        } else {
            $code .= "        \$json = [];\n";
            foreach ($bodyParams as $p) {
                $phpN = $p['phpName'];
                $apiN = addslashes($p['name']);
                $code .= "        if (\${$phpN} !== null) {\n";
                $code .= "            \$json['{$apiN}'] = \${$phpN};\n";
                $code .= "        }\n";
            }
            $code .= "        if (!empty(\$json)) {\n";
            $code .= "            \$options['json'] = \$json;\n";
            $code .= "        }\n";
        }
    }

    // Search flag
    if ($isSearch) {
        $code .= "        \$options['isSearch'] = true;\n";
    }

    // Make request
    $code .= "        \$response = \$this->httpClient->request('{$httpMethod}', \$path, \$options);\n";

    if ($responseIsText) {
        $code .= "        return \$response['_raw'] ?? '';\n";
    } elseif ($responseClass) {
        $code .= "        return \\{$modelsNs}\\{$responseClass}::fromArray(\$response);\n";
    } else {
        $code .= "        return \$response;\n";
    }

    $code .= "    }\n";

    return $code;
}
