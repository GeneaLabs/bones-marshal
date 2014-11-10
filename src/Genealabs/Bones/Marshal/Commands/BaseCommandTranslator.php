<?php namespace GeneaLabs\Bones\Marshal\Commands;

class BaseCommandTranslator implements CommandTranslator
{
    public function toHandler($command)
    {
        $handler = str_replace('Command', 'Handler', get_class($command));
        if (!class_exists($handler)) {
            $message = "Command handler '" . $handler . "' does not exist.";
            throw new \Exception($message);
        }

        return $handler;
    }
}
