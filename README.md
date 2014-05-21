chargebee-laravel4
==================

Integrates the ChargeBee API with Laravel 4

A simple [Laravel 4](http://four.laravel.com/) service provider for including the [ChargeBee PHP Client](https://github.com/chargebee/chargebee-php).

## Installation

The ChargeBee Service Provider can be installed via [Composer](http://getcomposer.org) by requiring the
`lshin/chargebee-laravel4` package in your project's `composer.json`.

```json
{
    "require": {
        "lshin/chargebee-laravel4": "0.*"
    }
}
```

Run composer update to pull in the libraries.
```bash
composer update
```


## Configure

To use the ChargeBee Service Provider, you must register the provider when bootstrapping your Laravel application.

Add 'Lshin\ChargeBeeLaravel4\ChargebeeLaravel4ServiceProvider' to the list of service providers in app/config/app.php
```php
'Lshin\ChargeBeeLaravel4\ChargebeeLaravel4ServiceProvider',
```

Create a config file for the package
```bash
php artisan config:publish lshin/chargebee-laravel4
```

Edit the config and set the "site" and "api_key" values to match the ChargeBee credentials.

## Usage

You can use the the all api classes following the documentation at https://apidocs.chargebee.com/docs/api
