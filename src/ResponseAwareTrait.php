<?php

declare(strict_types=1);

namespace Bvsk\Abstraction\Event;

use Symfony\Component\HttpFoundation\Response;

trait ResponseAwareTrait
{
    protected ?Response $response = null;

    public function getResponse(): ?Response
    {
        return $this->response;
    }

    public function setResponse(?Response $response): self
    {
        $this->response = $response;

        return $this;
    }
}
