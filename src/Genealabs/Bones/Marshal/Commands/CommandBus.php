<?php namespace GeneaLabs\Bones\Marshal\Commands;

/**
 * Interface CommandExecutor
 * @package GeneaLabs\Bones\Marshal\Commands
 */
interface CommandBus
{
    /**
     * @param $command
     * @return mixed
     */
    public function execute($command);
}
