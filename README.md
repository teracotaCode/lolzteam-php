# lolzteam/api

[![CI](https://github.com/teracotaCode/lolzteam-php/actions/workflows/ci.yml/badge.svg)](https://github.com/teracotaCode/lolzteam-php/actions/workflows/ci.yml)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

PHP 8.1+ обёртка для API **Lolzteam Forum** и **Market**.

- ✅ Полная типизация — PHP 8.1 readonly-классы для каждого запроса и ответа
- ✅ Автогенерация — модели и методы синхронизированы со схемами API
- ✅ Встроенный rate limiting — автоматическое соблюдение лимитов Lolzteam API
- ✅ Настраиваемые повторы — экспоненциальная отсрочка с jitter
- ✅ Поддержка прокси — HTTP и SOCKS5 через Guzzle

---

## Установка

```bash
git clone https://github.com/teracotaCode/lolzteam-php.git
cd lolzteam-php
composer install
```

Требуется PHP 8.1+ и Guzzle 7.

## Быстрый старт

```php
use Lolzteam\Runtime\HttpClient;
use Lolzteam\Generated\Forum\ForumClient;
use Lolzteam\Generated\Market\MarketClient;

// Forum API
$http = new HttpClient(['token' => 'your-forum-token']);
$forum = new ForumClient($http);
$me = $forum->users->me();
echo "Вы вошли как " . $me['user']['username'];

// Market API
$http = new HttpClient(['token' => 'your-market-token']);
$market = new MarketClient($http);
$listing = $market->items->list(['category' => 'steam']);
```

## Конфигурация

### Поддержка прокси

```php
use Lolzteam\Runtime\HttpClient;
use Lolzteam\Runtime\ProxyConfig;

$client = new HttpClient([
    'token' => '...',
    'proxy' => 'http://user:pass@proxy:8080',
]);

// Или SOCKS5
$client = new HttpClient([
    'token' => '...',
    'proxy' => 'socks5://user:pass@proxy:1080',
]);
```

### Настройка повторных запросов

```php
use Lolzteam\Runtime\HttpClient;
use Lolzteam\Runtime\RetryConfig;

$client = new HttpClient([
    'token' => '...',
    'retry' => new RetryConfig(
        maxRetries: 3,           // Максимум повторов (0 = без повторов)
        baseDelay: 0.5,          // Базовая задержка в секундах
        retryStatuses: [429, 502, 503, 504],
    ),
]);
```

### Ограничение частоты запросов

Клиент автоматически соблюдает лимиты Lolzteam API. При превышении лимита клиент ожидает перед повторным запросом.

## Обработка ошибок

```php
use Lolzteam\Runtime\Errors\LolzteamException;
use Lolzteam\Runtime\Errors\AuthException;
use Lolzteam\Runtime\Errors\ForbiddenException;
use Lolzteam\Runtime\Errors\NotFoundException;
use Lolzteam\Runtime\Errors\RateLimitException;
use Lolzteam\Runtime\Errors\ServerException;

try {
    $user = $forum->users->get(userId: 12345);
} catch (NotFoundException $e) {
    echo "Пользователь не найден";
} catch (AuthException $e) {
    echo "Проверьте ваш API-токен";
} catch (RateLimitException $e) {
    echo "Превышен лимит — повтор через {$e->retryAfter}с";
} catch (LolzteamException $e) {
    echo "Ошибка API: " . $e->getMessage();
}
```

## Генерация кода

Модели API и заглушки методов автоматически генерируются из OpenAPI JSON-схем.

```bash
# Перегенерация всего кода из схем
make generate

# Или по отдельности
php codegen/generate.php --schema schemas/forum.json --output-dir src/Generated/Forum --api-name Forum
php codegen/generate.php --schema schemas/market.json --output-dir src/Generated/Market --api-name Market
```

Сгенерированные файлы находятся в `src/Generated/` и должны быть закоммичены в репозиторий.

## Структура проекта

```
src/
├── Runtime/
│   ├── HttpClient.php           # HTTP-транспорт с повторами и rate limiting
│   ├── HttpClientInterface.php  # Интерфейс HTTP-клиента
│   ├── RetryHandler.php         # Логика повторных запросов с отсрочкой
│   ├── RetryConfig.php          # Конфигурация повторов
│   ├── RateLimiter.php          # Обработка лимитов запросов
│   ├── RateLimitConfig.php      # Конфигурация лимитов
│   ├── ProxyConfig.php          # Конфигурация прокси
│   └── Errors/                  # Иерархия исключений
└── Generated/
    ├── Forum/                   # Автосгенерированные классы Forum API
    └── Market/                  # Автосгенерированные классы Market API
```

## Разработка

```bash
# Установка зависимостей
composer install


# Генерация кода
make generate

# Линтинг
make lint
```

## Лицензия

MIT — см. [LICENSE](LICENSE).
