<?php

declare(strict_types=1);

namespace Dispatching;

use Dispatching\Contract\DispatchActionContract;
use Dispatching\ValueObject\RouteAction;

final readonly class DispatchAction implements DispatchActionContract
{
    public function __construct(private RouteAction $action) {}

    public function execute(): mixed
    {
        $controller = $this->action->controller();
        $method = $this->action->method();

        return new $controller()->$method();
    }
}
