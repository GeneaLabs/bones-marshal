<?php namespace GeneaLabs\Bones\Marshal\Commands;

use Illuminate\Foundation\Application;

class BaseCommandBus implements CommandBus
{
    protected $app;
    protected $commandTranslator;

    public function __construct(Application $app, BaseCommandTranslator $commandTranslator)
    {
        $this->app = $app;
        $this->commandTranslator = $commandTranslator;
    }

    public function execute($command)
    {
        $handler = $this->commandTranslator->translateToHandler($command);

        return $this->app->make($handler)->handle($command);
    }
}
