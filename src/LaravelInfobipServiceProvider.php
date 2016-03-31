<?php

namespace Mrabbani\LaravelInfobip;

use Illuminate\Support\ServiceProvider;

class LaravelInfobipServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'/Config/sms.php' => config_path('sms.php')
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->mergeConfigFrom(__DIR__.'/Config/sms.php', 'sms');
        $this->app['sms'] = $this->app->share(function($app) {
            return new  SMS();
        });
    }
}
