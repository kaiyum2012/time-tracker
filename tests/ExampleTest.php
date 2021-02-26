<?php

namespace Kaiyum2012\TimeTracker\Tests;

use Orchestra\Testbench\TestCase;
use Kaiyum2012\TimeTracker\TimeTrackerServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TimeTrackerServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
