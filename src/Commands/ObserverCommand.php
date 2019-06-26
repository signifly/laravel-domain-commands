<?php

namespace Signifly\Console\Commands;

use Symfony\Component\Console\Input\InputOption;
use Illuminate\Foundation\Console\ObserverMakeCommand;

class ObserverCommand extends ObserverMakeCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'domain:observer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new observer class for a given domain';

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        if ($domain = $this->option('domain')) {
            return "{$rootNamespace}\\{$domain}\\Observers";
        }

        $defaultNamespace = config('domain-commands.default_namespace');

        return "{$rootNamespace}\\{$defaultNamespace}\\Observers";
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        return $this->laravel->basePath().'/app/'.str_replace('\\', '/', $name).'.php';
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stubPath = config('domain-commands.stubs.rule');

        if (! is_null($stubPath) && is_string($stubPath)) {
            return $stubPath;
        }

        return parent::getStub();
    }

    /**
     * Get the root namespace for the class.
     *
     * @return string
     */
    protected function rootNamespace()
    {
        return 'Domain\\';
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array_merge(parent::getOptions(), [
            ['domain', 'd', InputOption::VALUE_OPTIONAL, 'Set the domain name'],
        ]);
    }
}
