<?php

declare(strict_types=1);

use Dispatching\DispatchAction;
use Dispatching\ValueObject\RouteAction;
use Tests\Fixtures\DummyController;

describe('Feature: Route Action Dispatching', function () {
    it('must invoke the intercepted action', function () {
        $routeAction = new RouteAction([DummyController::class, 'index']);
        $dispatcher = new DispatchAction($routeAction);
        $result = $dispatcher->execute();

        expect($result)->toBe('hello-world');
    });
});
