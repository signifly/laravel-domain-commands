<?php

namespace Signifly\Console\Commands;

class EventCommand extends DomainGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'domain:event';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an event for a given domain';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Event';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stubPath = config('domain-commands.stubs.action');

        if (! is_null($stubPath) && is_string($stubPath)) {
            return $stubPath;
        }

        return __DIR__.'/stubs/action.stub';
    }
}
