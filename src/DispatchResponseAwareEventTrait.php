<?php

declare(strict_types=1);

namespace Bvsk\Abstraction\Event;

use Symfony\Component\HttpFoundation\Response;

trait DispatchResponseAwareEventTrait
{
    use DispatchTrait;

    protected function dispatchResponse(string $eventName, ResponseAwareEventInterface $event): ?Response
    {
        $this->dispatch($eventName, $event);

        if ($event->getResponse()) {
            return $event->getResponse();
        }

        return null;
    }
}
