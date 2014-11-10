<?php namespace GeneaLabs\Bones\Marshal\Events;

use Illuminate\Events\Dispatcher;
use Illuminate\Log\Writer;

class EventDispatcher
{
    protected $dispatcher;
    protected $log;

    public function __construct(Dispatcher $dispatcher, Writer $log)
    {
        $this->dispatcher = $dispatcher;
        $this->log = $log;
    }

    public function dispatch(array $events)
    {
        foreach ($events as $event) {
            $eventName = $this->getEventName($event);
            $this->dispatcher->fire($eventName, $event);
            $this->log->info($eventName . ' was fired.');
        }
    }

    /**
     * @param $event
     * @return mixed
     */
    protected function getEventName($event)
    {
        return $eventName = str_replace('\\', '.', str_replace('Event', '', get_class($event)));
    }
}
