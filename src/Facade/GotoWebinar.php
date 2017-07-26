<?php

namespace Slakbal\Citrix\Facade;

use Illuminate\Support\Facades\Facade;
use Mockery;
use Slakbal\Citrix\Webinar;

class GotoWebinar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Webinar::class;
    }

    public static function fake()
    {
        $mock = Mockery::mock(Webinar::class);
        static::swap($mock);
        return $mock;
    }
}
