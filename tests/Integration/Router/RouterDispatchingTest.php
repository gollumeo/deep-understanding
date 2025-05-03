<?php

declare(strict_types=1);

describe('Integration: Router + Dispatching', function () {
    it('dispatches a matched route action and returns expected result', function () {
        // Given: une route enregistrée avec un DummyController::index
        // When: je fais un "match" sur un verbe + URI existants
        // Then: je passe l'action matchée à DispatchAction et vérifie que ça exécute bien index()
    });
});
