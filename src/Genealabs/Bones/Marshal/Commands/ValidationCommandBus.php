<?php namespace GeneaLabs\Bones\Marshal\Commands;

class ValidationCommandBus extends BaseCommandBus implements CommandBus
{
    public function execute($command)
    {
        $validator = $this->commandTranslator->toValidator($command);
        if (class_exists($validator)) {
            $this->app->make($validator)->validate($command);
        }
        return parent::execute($command);
    }
}
