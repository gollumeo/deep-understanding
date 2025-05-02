<?php

declare(strict_types=1);

namespace Dispatching\ValueObject;

final readonly class RouteAction
{
    /**
     * @param  array{0: class-string, 1: string}  $action
     */
    public function __construct(private array $action) {}

    public function controller(): string
    {
        return $this->action[0];
    }

    public function method(): string
    {
        return $this->action[1];
    }
}
