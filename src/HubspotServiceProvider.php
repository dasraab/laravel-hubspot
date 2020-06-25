<?php

namespace dasraab\hubspotlaravel;

use illuminate\support\serviceprovider;
use HubSpot\Factory;
class HubspotServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/hubspot.php' => config_path('hubspot.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Factory::class, function ($app) {
            return Factory::createWithApiKey(config('hubspot.api_key'));
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/hubspot.php',
            'hubspot'
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Factory::class];
    }
}
