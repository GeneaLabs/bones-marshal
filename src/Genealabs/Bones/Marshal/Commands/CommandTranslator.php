<?php namespace GeneaLabs\Bones\Marshal\Commands;

class CommandTranslator
{
    public function translateToHandler($command)
    {
        $handler = str_replace('Command', 'Handler', get_class($command));
        if (!class_exists($handler)) {
            $message = "Command handler '" . $handler . "' does not exist.";
            throw new \Exception($message);
        }

        return $handler;
    }

    public function toValidator($command)
    {
        return str_replace('Command', 'Validator', get_class($command));
    }
}
