<?php

declare(strict_types=1);

namespace Router\Contract;

interface RouterContract
{
    /**
     * @param  array{0: class-string, 1: string}  $action
     */
    public function register(string $verb, string $uri, array $action): void;

    /**
     * @return array<int, array{
     *     verb: string,
     *     uri: string,
     *     action: array{0: class-string, 1: string}
     * }>
     */
    public function list(): array;
}
