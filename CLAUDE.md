# Laravel Portfolio Application

## Quick Commands

```sh
composer setup          # Full setup: install, migrate, npm install, build
composer dev            # Dev server (artisan serve + queue + vite concurrently)
composer test           # Clear config cache + run Pest tests
```

## Environment

- **PHP 8.3+** with Laravel 13
- **SQLite** default database (in-memory for tests)
- **Tailwind CSS v4** via `@tailwindcss/vite` plugin
- **Pest v5** for testing (closure syntax: `test('name', function () {})`)
- **Vite 8** with `laravel-vite-plugin`
- **Laravel Boost** installed for AI agent tooling

## Testing

```sh
composer test                    # Runs all tests
php artisan test --filter=Name   # Single test
```

Tests use in-memory SQLite, array cache/mail/session. No database seeding needed for tests.

## Conventions

- Models use PHP attributes: `#[Fillable([...])]`, `#[Hidden([...])]` (see `app/Models/User.php`)
- Entry points: `resources/js/app.js`, `resources/css/app.css`
- Views in `resources/views/` (Blade templates)
- Single route in `routes/web.php` (welcome page only)

## Gotchas

- Windows environment: use `composer` commands, not `./vendor/bin/sail`
- `vite.config.js` watches ignore `storage/framework/views/` (compiled views)
- `RefreshDatabase` trait commented out in `tests/Pest.php` by default
