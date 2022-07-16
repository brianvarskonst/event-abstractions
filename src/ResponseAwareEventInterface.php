<?php

namespace Bvsk\Abstraction\Event;

use Symfony\Component\HttpFoundation\Response;

interface ResponseAwareEventInterface
{
    public function getResponse(): ?Response;

    public function setResponse(?Response $response): self;
}
