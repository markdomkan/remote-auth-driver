<?php

namespace MarkDomkan\RemoteAuthDriver;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class RemoteAuthDriverServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Auth::extend('remote-auth', function ($app, $name, array $config) {
            return new RemoteAuthDriverGuard($app['request']);
        });
    }
}
