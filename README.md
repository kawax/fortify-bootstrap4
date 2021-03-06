# Fortify views for Bootstrap 4

[![Maintainability](https://api.codeclimate.com/v1/badges/028aad346977092c76ae/maintainability)](https://codeclimate.com/github/kawax/fortify-bootstrap4/maintainability)

Almost the same as `laravel/ui` views.

## Available views
- register
- login
- forgot-password
- reset-password
- verify-email
- confirm-password

### Unavailable
- two-factor-challenge

This is an experimental package so not all views are available.

## Requirements
- PHP >= 7.3
- Laravel >= 8.0
- Fortify >= 1.5

## Installation
Before install this package, you should install `laravel/fortify` (without Jetstream)
https://github.com/laravel/fortify

```
composer require laravel/fortify
php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
php artisan migrate
```

Add `App\Providers\FortifyServiceProvider::class,` to `config/app.php`

Next,
```
composer require revolution/fortify-bootstrap4
```

Add `Fortify::viewPrefix('fortify-bootstrap4::');` to `FortifyServiceProvider@boot`

```php
    public function boot()
    {
        Fortify::viewPrefix('fortify-bootstrap4::');

        //
    }
```

## Publish views

```
php artisan vendor:publish --tag=fortify-bootstrap4
```

Publish to `/resources/views/vendor/fortify-bootstrap4`

You can customize any files.

## Demo
https://github.com/kawax/fortify-project/tree/bootstrap4

## LICENSE
MIT  
