# TokenRotator: Zero-Trust Refresh Token Security

[![GitHub License](https://img.shields.io/github/license/smit-backend/oauth2-token-rotator?style=flat-square)](LICENSE)
[![GitHub Stars](https://img.shields.io/github/stars/smit-backend/oauth2-token-rotator?style=flat-square)](https://github.com/smit-backend/oauth2-token-rotator/stargazers)
[![GitHub Issues](https://img.shields.io/github/issues/smit-backend/oauth2-token-rotator?style=flat-square)](https://github.com/smit-backend/oauth2-token-rotator/issues)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-blue?style=flat-square&logo=php)](https://php.net)

> **Cryptographically secure OAuth2 and OIDC token exchange server enforcing automated single-use refresh token rotation and replay detection.**

---

## 🚀 Key Architectural Highlights

- **Production Resilience:** Engineered with decoupled interfaces, structured exception trees, and strict typings.
- **High Concurrency Ready:** Built to eliminate latency bottlenecks, memory spikes, and race conditions.
- **Enterprise Standards:** Zero-dependency core logic with clean service provider adapters.
- **Full Observability:** Embedded metrics telemetry and structured contextual logging.

---

## 🛠️ Architecture & Lifecycle Workflow

```mermaid
graph TD
    Client[Incoming Event / API Trigger] --> Gate[Input Validation & Policy Guard]
    Gate --> CoreEngine[TokenRotator: Zero-Trust Refresh Token Security]
    CoreEngine --> Adapter[External Storage / Cluster / State Provider]
    CoreEngine --> Observer[Telemetry & Audit Logger]
```

---

## 📦 Installation & Setup

### Requirements
- **PHP:** `^8.2` or later
- **Composer:** Modern Composer v2+

### Installation via Composer
```bash
composer require smit-backend/oauth2-token-rotator
```

---

## ⚙️ Configuration & Quick Start

Publish configuration and default assets:
```bash
php artisan vendor:publish --tag="oauth2-token-rotator-config"
```

Sample configuration excerpt (`config/oauth2-token-rotator.php`):
```php
return [
    'enabled' => env('OAUTH2_TOKEN_ROTATOR_ENABLED', true),
    'timeout' => env('OAUTH2_TOKEN_ROTATOR_TIMEOUT', 30),
    'log_channel' => env('OAUTH2_TOKEN_ROTATOR_LOG', 'stack'),
];
```

---

## 🧪 Testing

Run test suites locally:
```bash
composer test
```

---

## 🛡️ Security & Contributing

If you discover any security-related issues, please open an issue or email directly via GitHub. Contributions via pull requests are always welcome!

---

## 📄 License

This package is open-sourced software licensed under the [MIT License](LICENSE).

Developed and maintained with ❤️ by **[smit-backend](https://github.com/smit-backend)**.
