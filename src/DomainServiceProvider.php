<?php

namespace Signifly\Console;

use Illuminate\Support\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/domain-commands.php' => config_path('domain-commands.php'),
            ], 'domain-commands-config');

            $this->commands([
            ]);
        }

        $this->mergeConfigFrom(__DIR__.'/../config/domain-commands.php', 'domain-commands');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
