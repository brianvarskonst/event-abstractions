<?php

declare(strict_types=1);

namespace Bvsk\Abstraction\Event;

use ArrayObject;
use Symfony\Component\HttpFoundation\Request;

class ViewEvent extends RequestEvent
{
    protected ArrayObject $data;

    public function __construct(
        ArrayObject|array $data,
        ?Request $request = null
    ) {
        parent::__construct($request);

        $this->data = is_array($data)
            ? new ArrayObject($data)
            : $data;
    }

    public function getData(): ArrayObject
    {
        return $this->data;
    }
}
