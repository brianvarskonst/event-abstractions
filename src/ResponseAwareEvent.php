<?php

declare(strict_types=1);

namespace Bvsk\Abstraction\Event;

use Symfony\Contracts\EventDispatcher\Event;

class ResponseAwareEvent extends Event implements ResponseAwareEventInterface
{
    use ResponseAwareTrait;
}
