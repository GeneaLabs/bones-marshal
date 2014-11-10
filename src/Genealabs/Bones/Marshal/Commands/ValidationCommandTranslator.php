<?php namespace GeneaLabs\Bones\Marshal\Commands;

class ValidationCommandTranslator extends BaseCommandTranslator implements CommandTranslator
{
    public function toValidator($command)
    {
        return str_replace('Command', 'Validator', get_class($command));
    }
}
