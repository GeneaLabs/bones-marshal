<?php namespace GeneaLabs\Bones\Marshal\Events;

trait EventGenerator
{
    protected $pendingEvents = [];

    public function raise($event)
    {
        $this->pendingEvents[] = $event;
    }

    public function release($event = null)
    {
        if ($event != null) {
            if ($key = array_search($event, $this->pendingEvents)) {
                $released = $event;
                unset($this->pendingEvents[$key]);
                $this->pendingEvents = array_values($this->pendingEvents);
            }
        } else {
            $released = $this->pendingEvents;
            $this->pendingEvents = [];
        }

        return $released;
    }
}
