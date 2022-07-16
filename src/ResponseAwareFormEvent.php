<?php

declare(strict_types=1);

namespace Bvsk\Abstraction\Event;

class ResponseAwareFormEvent extends FormEvent implements ResponseAwareEventInterface
{
    use ResponseAwareTrait;
}
