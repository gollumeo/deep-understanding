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
        expect(false)->toBeFalsy();
    });
});
