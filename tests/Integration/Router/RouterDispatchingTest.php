<?php

declare(strict_types=1);

describe('Integration: Router + Dispatching', function () {
    it('dispatches a matched route action and returns expected result', function () {
        // Given: a registered router with a DummyController::index
        // When: I do make a match on the verb + URI combo
        // Then: I pass the matched action to DispatchAction & check that index() is executed properly
    });
});
