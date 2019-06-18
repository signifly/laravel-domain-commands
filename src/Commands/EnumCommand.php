<?php

namespace Signifly\Console\Commands;

class EnumCommand extends DomainGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'domain:enum';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an enum for a given domain';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Enum';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stubPath = config('domain-commands.stubs.enum');

        if (! is_null($stubPath) && is_string($stubPath)) {
            return $stubPath;
        }

        return __DIR__.'/stubs/enum.stub';
    }
}
