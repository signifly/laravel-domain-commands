<?php

namespace Signifly\Console\Commands;

use Symfony\Component\Console\Input\InputOption;

class DTOCommand extends DomainGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'domain:dto';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new DTO for a given domain';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'DTO';

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        if ($domain = $this->option('domain')) {
            return "{$rootNamespace}\\{$domain}\\DTO";
        }

        $defaultNamespace = config('domain-commands.default_namespace');

        return "{$rootNamespace}\\{$defaultNamespace}\\DTO";
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stubPath = config('domain-commands.stubs.dto');

        if (! is_null($stubPath) && is_string($stubPath)) {
            return $stubPath;
        }

        return __DIR__.'/stubs/dto.stub';
    }
}
