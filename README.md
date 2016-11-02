# Laravel redirect helper

[![Build Status](https://travis-ci.org/brayniverse/laravel-redirect-helper.svg)](https://travis-ci.org/brayniverse/laravel-redirect-helper)
[![Total Downloads](https://poser.pugx.org/brayniverse/laravel-redirect-helper/d/total.svg)](https://packagist.org/packages/brayniverse/laravel-redirect-helper)
[![Latest Stable Version](https://poser.pugx.org/brayniverse/laravel-redirect-helper/v/stable.svg)](https://packagist.org/packages/brayniverse/laravel-redirect-helper)
[![Latest Unstable Version](https://poser.pugx.org/brayniverse/laravel-redirect-helper/v/unstable.svg)](https://packagist.org/packages/brayniverse/laravel-redirect-helper)
[![License](https://poser.pugx.org/brayniverse/laravel-redirect-helper/license.svg)](https://packagist.org/packages/brayniverse/laravel-redirect-helper)

Syntactic sugar for those occasions when you want to redirect from an old route to a new route.

This package adds a `Route::redirect()` helper method so you don't have to create a closure for each redirect.

## Installation

Begin by installing the package through Composer.

```bash
$ composer require brayniverse/laravel-redirect-helper
```

Then add the following to your providers array in `config/app.php`.

```php
Brayniverse\LaravelRedirectHelper\ServiceProvider::class
```

## Usage

Normally you'd have to create a closure to redirect to the new route.

```php
Route::get('/contact_us', function () {
  return redirect('/contact');
});
```

Now you can do the same in one line.

```php
Route::redirect('/contact_us', '/contact');
```

### Setting status code

Optionally, you can pass a third argument to `Route::redirect()` which will set the status code when redirecting. If you do not specify a status code, the package will use `301` as the status code.

```php
Route::redirect('/contact_us', '/contact', 302);
```

## Credits

- [Christopher L Bray](https://github.com/brayniverse)
- [All Contributors](../../contributors)
