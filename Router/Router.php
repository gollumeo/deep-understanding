<?php

declare(strict_types=1);

namespace Router;

use PHPStan\BetterReflection\Reflection\Adapter\Exception\NotImplemented;

final class Router implements Contract\RouterContract
{
    /**
     * @var array<int, array{
     *     verb: string,
     *     uri: string,
     *     action: array{0: class-string, 1: string}
     * }>
     */
    private array $routes;

    /**
     * {@inheritDoc}
     */
    public function register(string $verb, string $uri, array $action): void
    {
        $this->routes[] = [
            'verb' => $verb,
            'uri' => $uri,
            'action' => $action,
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function list(): array
    {
        return $this->routes;
    }

    /**
     * {@inheritDoc}
     */
    public function match(string $verb, string $uri): array
    {
        throw new NotImplemented('Method `match` not implemented.');
    }
}
