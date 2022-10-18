<?php

namespace Signifly\Console\Commands;

class TestActionCommand extends TestDomainGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'domain:action-test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a test for an action for a given domain';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Action';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stubPath = config('domain-commands.stubs.tests.action');

        if (! is_null($stubPath) && is_string($stubPath)) {
            return $stubPath;
        }

        return __DIR__.'/stubs/tests/action.stub';
    }
}
