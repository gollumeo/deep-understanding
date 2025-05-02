<?php

declare(strict_types=1);

use Router\Router;
use Tests\Fixtures\DummyController;

describe('Feature: Route Matching', function () {
    it('can register a new route', function () {
        $router = new Router();
        $router->register(verb: 'GET', uri: '/users', action: [DummyController::class, 'index']);
        $routes = $router->list();

        expect($routes)->toBeArray()->toBe([
            [
                'verb' => 'GET',
                'uri' => '/users',
                'action' => [
                    DummyController::class,
                    'index',
                ],
            ],
        ]);
    });

    it('can match a request to a route', function () {
        $router = new Router();
        $router->register(verb: 'GET', uri: '/users', action: [DummyController::class, 'index']);

        $result = $router->match('GET', '/users');

        expect($result)->toBe([DummyController::class, 'index']);
    });

    it('must throw if there is no registered route', function () {
        $router = new Router();

        expect(fn () => $router->match('put', '/test'))->toThrow(InvalidArgumentException::class);
    });

    it('must throw if the verb & uri do not match any registered route', function () {
        $router = new Router();
        $router->register('GET', '/users', [DummyController::class, 'index']);

        expect(fn () => $router->match('PUT', '/users'))->toThrow(InvalidArgumentException::class);
    });
});

describe('Feature: Route Dispatching delegation', function () {});
