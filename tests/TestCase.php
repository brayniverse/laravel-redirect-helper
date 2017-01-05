<?php

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [\Brayniverse\LaravelRedirectHelper\ServiceProvider::class];
    }
}
