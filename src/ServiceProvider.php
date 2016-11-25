<?php

namespace Brayniverse\LaravelRedirectHelper;

use Illuminate\Support\Facades\Route;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        Route::macro('redirect', function ($url, $destination, $status = 301) {
            return Route::any($url, '\Brayniverse\LaravelRedirectHelper\RedirectController@handle')
                ->defaults('redirection', compact('destination', 'status'));
        });
    }
}
