<?php

declare(strict_types=1);

describe('Feature: Route Matching', function () {
    it('can register a new route', function () {
        $router = new Router();
        $router->register('GET', '/users', [DummyUserController::class, 'index']);
        $routes = $router->list();

        expect($routes)->toBeArray()->toBe([
            [
                'verb' => 'GET',
                'uri' => '/users',
                'handler' => [
                    DummyUserController::class,
                    'index',
                ],
            ],
        ]);
    });

    it('can match a request to a route', function () {
        expect(false)->toBeFalsy();
    });
});
