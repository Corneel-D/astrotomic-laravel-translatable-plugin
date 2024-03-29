# Localization plugin based on astrotomic/laravel-translatable

[![Latest Version on Packagist](https://img.shields.io/packagist/v/corneel-d/filament-laravel-translatable-plugin.svg?style=flat-square)](https://packagist.org/packages/corneel-d/filament-laravel-translatable-plugin)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/corneel-d/filament-laravel-translatable-plugin/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/corneel-d/filament-laravel-translatable-plugin/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/corneel-d/filament-laravel-translatable-plugin/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/corneel-d/filament-laravel-translatable-plugin/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/corneel-d/filament-laravel-translatable-plugin.svg?style=flat-square)](https://packagist.org/packages/corneel-d/filament-laravel-translatable-plugin)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require corneel-d/filament-laravel-translatable-plugin
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-laravel-translatable-plugin-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-laravel-translatable-plugin-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-laravel-translatable-plugin-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$LaravelTranslatablePlugin = new CorneelD\LaravelTranslatablePlugin();
echo $LaravelTranslatablePlugin->echoPhrase('Hello, CorneelD!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Corneel D](https://github.com/Corneel-D)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
