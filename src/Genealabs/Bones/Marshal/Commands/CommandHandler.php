<?php namespace GeneaLabs\Bones\Marshal\Commands;

use GeneaLabs\Bones\Marshal\Events\EventDispatcher;

abstract class CommandHandler implements CommandHandlerInterface
{
    /**
     * @var EventDispatcher
     */
    protected $dispatcher;

    /**
     * @param EventDispatcher $dispatcher
     */
    public function __construct(EventDispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }
}