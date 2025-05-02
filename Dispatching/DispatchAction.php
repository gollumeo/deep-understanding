<?php

declare(strict_types=1);

namespace Dispatching;

use Dispatching\Contract\DispatchActionContract;

final class DispatchAction implements DispatchActionContract
{
    /**
     * {@inheritDoc}
     */
    public function __construct(private readonly array $action) {}

    public function execute(): mixed
    {
        $controller = $this->action[0];
        $callable = $this->action[1];

        return new $controller()->$callable();
    }
}
