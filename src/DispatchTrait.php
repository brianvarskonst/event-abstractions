<?php

declare(strict_types=1);

namespace Bvsk\Abstraction\Event;

use Symfony\Contracts\EventDispatcher\Event;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

trait DispatchTrait
{
    /**
     * @throws \Exception
     */
    protected function dispatch(string $eventName, Event $event): void
    {
        if (empty($this->eventDispatcher) || !$this->eventDispatcher instanceof EventDispatcherInterface) {
            throw new \Exception(
                sprintf(
                    'This trait requires an eventDispatcher instance that implements %s',
                    EventDispatcherInterface::class
                )
            );
        }

        $this->eventDispatcher->dispatch($event, $eventName);
    }
}
