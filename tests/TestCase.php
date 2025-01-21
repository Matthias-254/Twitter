<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected funtion setUp(); void
    {
        parent::setUp();    

        $this->withoutVite();
    }
}
