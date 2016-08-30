# Laravel redirect helper

![StyleCI](https://styleci.io/repos/66860219/shield)

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
