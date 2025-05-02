<?php

declare(strict_types=1);

use Dispatching\DispatchAction;
use Tests\Fixtures\DummyController;

describe('Feature: Route Action Dispatching', function () {
    it('must invoke the intercepted action', function () {
        $dispatcher = new DispatchAction([DummyController::class, 'index']);
        $result = $dispatcher->execute();

        expect($result)->toBe('hello-world');
    });
});
