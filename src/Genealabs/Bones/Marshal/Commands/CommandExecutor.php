<?php namespace GeneaLabs\Bones\Marshal\Commands;

/**
 * Interface CommandExecutor
 * @package GeneaLabs\Bones\Marshal\Commands
 */
interface CommandExecutor
{
    /**
     * @param $command
     * @return mixed
     */
    public function execute($command);
}
