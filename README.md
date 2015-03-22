# MoneyFormatter Laravel

[![Latest Version](https://img.shields.io/github/release/nwidart/money-formatter-laravel.svg?style=flat-square)](https://github.com/nwidart/money-formatter-laravel/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Quality Score](https://img.shields.io/scrutinizer/g/nwidart/money-formatter-laravel.svg?style=flat-square)](https://scrutinizer-ci.com/g/nwidart/money-formatter-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/nwidart/money-formatter-laravel.svg?style=flat-square)](https://packagist.org/packages/nwidart/money-formatter-laravel)

A laravel integration of my [MoneyFormatter](https://github.com/nWidart/MoneyFormatter) package.

## Install

Via Composer

``` bash
$ composer require nwidart/money-formatter-laravel
```

Add the service provider to `config/app.php`

``` php
'Nwidart\MoneyFormatterLaravel\MoneyFormatterServiceProvider'
```

## Usage

Inject the `MoneyFormatter` class into your methods/constructors. Or use the `MoneyFormatter` Facade.

For information on the usage of the MoneyFormatter class, please refer to the [original repository](https://github.com/nWidart/MoneyFormatter).

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Nicolas Widart](https://github.com/nWidart)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
