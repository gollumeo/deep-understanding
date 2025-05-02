<?php

declare(strict_types=1);

namespace Dispatching\Contract;

use Dispatching\ValueObject\RouteAction;

interface DispatchActionContract
{
    public function __construct(RouteAction $action);

    public function execute(): mixed;
}
