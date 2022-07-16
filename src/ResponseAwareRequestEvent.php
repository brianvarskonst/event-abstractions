<?php

declare(strict_types=1);

namespace Bvsk\Abstraction\Event;

class ResponseAwareRequestEvent extends RequestEvent implements ResponseAwareEventInterface
{
    use ResponseAwareTrait;
}
