<?php namespace GeneaLabs\Bones\Marshal\Commands;

use Illuminate\Foundation\Application;

class ValidationCommandBus extends BaseCommandBus implements CommandBus
{
    public function __construct(Application $app, ValidationCommandTranslator $commandTranslator)
    {
        parent::__construct($app, $commandTranslator);
    }

    public function execute($command)
    {
        $validator = $this->commandTranslator->toValidator($command);
        if (class_exists($validator)) {
            $this->app->make($validator)->validate($command);
        }
        return parent::execute($command);
    }
}
