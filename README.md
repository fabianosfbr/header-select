# This is my package header-select

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fabianosfbr/header-select.svg?style=flat-square)](https://packagist.org/packages/fabianosfbr/header-select)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/fabianosfbr/header-select/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/fabianosfbr/header-select/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/fabianosfbr/header-select/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/fabianosfbr/header-select/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/fabianosfbr/header-select.svg?style=flat-square)](https://packagist.org/packages/fabianosfbr/header-select)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require fabianosfbr/header-select
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="header-select-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="header-select-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="header-select-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$headerSelect = new Fabianosfbr\HeaderSelect();
echo $headerSelect->echoPhrase('Hello, Fabianosfbr!');
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

- [Fabiano Fernandes](https://github.com/fabianosfbr)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
