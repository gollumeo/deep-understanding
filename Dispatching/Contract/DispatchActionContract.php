<?php

declare(strict_types=1);

namespace Dispatching\Contract;

interface DispatchActionContract
{
    /**
     * @param  array{0: class-string, 1: string}  $action
     */
    public function __construct(array $action);

    public function execute(): mixed;
}
