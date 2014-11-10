<?php namespace GeneaLabs\Bones\Marshal\Commands;

/**
 * Interface CommandHandler
 * @package GeneaLabs\Bones\Marshal\Commands
 */
interface CommandHandlerInterface
{
    /**
     * @param $command
     * @return mixed
     */
    public function handle($command);
}
