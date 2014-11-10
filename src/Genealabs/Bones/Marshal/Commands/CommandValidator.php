<?php namespace GeneaLabs\Bones\Marshal\Commands;

class CommandValidator extends CommandMarshaller implements CommandExecutor
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
