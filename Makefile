.PHONY: help generate test lint clean install

help: ## Show this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-15s\033[0m %s\n", $$1, $$2}'

install: ## Install dependencies
	composer install --prefer-dist --no-interaction

generate: ## Run code generation from OpenAPI schemas
	php codegen/generate.php --schema schemas/forum.json --output-dir src/Generated/Forum --api-name Forum
	php codegen/generate.php --schema schemas/market.json --output-dir src/Generated/Market --api-name Market

test: ## Run PHPUnit tests
	vendor/bin/phpunit --colors=always

lint: ## Run static analysis / code style checks
	@if [ -f vendor/bin/php-cs-fixer ]; then vendor/bin/php-cs-fixer fix --dry-run --diff; fi
	@if [ -f vendor/bin/phpstan ]; then vendor/bin/phpstan analyse; fi

clean: ## Remove build artifacts
	rm -rf vendor/ .phpunit.cache/ build/ coverage/
