<?php

declare(strict_types=1);

namespace Tests\Fixtures;

final class DummyController
{
    public function index(): string
    {
        return 'hello-world';
    }
}
