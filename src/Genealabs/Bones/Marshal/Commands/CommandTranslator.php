<?php namespace GeneaLabs\Bones\Marshal\Commands;

interface CommandTranslator
{
    public function toHandler($command);
}
