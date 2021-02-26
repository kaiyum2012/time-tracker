<?php

namespace Kaiyum2012\TimeTracker;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kaiyum2012\TimeTracker\Skeleton\SkeletonClass
 */
class TimeTrackerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'time-tracker';
    }
}
