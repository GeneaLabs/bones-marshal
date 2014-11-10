<?php namespace GeneaLabs\Bones\Marshal\Events;

use ReflectionClass;

/**
 * Class EventListener
 * @package GeneaLabs\Bones\Marshal\Events
 */
class EventListener
{
    /**
     * @var
     */
    public $event;

    /**
     * @param $event
     * @return mixed
     */
    public function handle($event)
    {
        if ($listener = $this->getRegisteredListener($event)) {
            return call_user_func([$this, $listener], $event);
        }

        return false;
    }

    /**
     * @param $event
     * @return mixed
     */
    protected function getEventName($event)
    {
        return str_replace('Event', '', (new ReflectionClass($event))->getShortName());
    }

    /**
     * @param $event
     * @return null|string
     */
    protected function getRegisteredListener($event)
    {
        $methodName = 'when' . $this->getEventName($event);
        if (method_exists($this, $methodName)) {
            return $methodName;
        }

        return false;
    }
}
