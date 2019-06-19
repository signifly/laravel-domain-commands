<?php

namespace Signifly\Console;

use Illuminate\Support\ServiceProvider;
use Signifly\Console\Commands\DTOCommand;
use Signifly\Console\Commands\EnumCommand;
use Signifly\Console\Commands\RuleCommand;
use Signifly\Console\Commands\EventCommand;
use Signifly\Console\Commands\ModelCommand;
use Signifly\Console\Commands\ActionCommand;
use Signifly\Console\Commands\ObserverCommand;

class DomainServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/domain-commands.php' => config_path('domain-commands.php'),
            ], 'domain-commands-config');

            $this->commands([
                ActionCommand::class,
                DTOCommand::class,
                EnumCommand::class,
                EventCommand::class,
                ModelCommand::class,
                ObserverCommand::class,
                RuleCommand::class,
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
