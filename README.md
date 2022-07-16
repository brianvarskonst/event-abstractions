# Bvsk Event Abstractions

Provides common used Event Abstractions for Symfony 5 & 6.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Quality Assurance](#quality-assurance)

## Requirements
- PHP 8.1
- Composer 2
- Symfony 5 || 6

## Installation

### Composer

Install with [Composer](https://getcomposer.org/):

```sh
$ composer require brianvarskonst/event-abstractions
```

## Usage

### Request event

```php
use Bvsk\Abstraction\Event\RequestEvent;
use Symfony\Component\HttpFoundation\Request;

// dispatch event
$eventDispatcher->dispatch(
    new RequestEvent($request)
);

// in dispatcher get request
$request = $event->getRequest();
```

### Form event

```php
use Bvsk\Abstraction\Event\FormEvent;
use Symfony\Component\HttpFoundation\Request;

// dispatch event
$eventDispatcher->dispatch(
    new FormEvent($form, $request)
);

// in dispatcher get request and form
$request = $event->getRequest();
$form = $event->getForm();
```

### View event

```php
use Bvsk\Abstraction\Event\ViewEvent;
use Symfony\Component\HttpFoundation\Request;
use ArrayObject;

// dispatch event (also in controller)
$eventDispatcher->dispatch(
    new ViewEvent(
        // Pass view Data to the Event, also can use a generic array instead of the ArrayObject
        new ArrayObject(
        [
            'page' => $page,
            'form' => $form->createView(),
        ]
    )
);

// in dispatcher get data or append values
$data = $event->getData();
$event->getData()['more'] = 'more-data';

// in controller again
return $this->render(
    'products.html.twig',
    $viewData->getArrayCopy()
);
```

## Quality Assurance

This Package provides a baseline of common used QA Code tools which you can run simply by custom composer script commands.

### PHP CodeSniffer

To ensure the quality of the code this package uses the Inpsyde Coding Standards,
which are especially created for WordPress Projects. You can also use it for every other projects.
Provides a good set of coding rules via PHP CodeSniffer CLI Tool.

```shell
$ composer cs
```

### Psalm

```shell
$ composer psalm
```

## License

Copyright (c) 2022, Brianvarskonst under [MIT](LICENSE) License

## Contributing

All feedback / bug reports / pull requests are welcome.
