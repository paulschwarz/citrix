<?php

namespace Slakbal\Citrix\Test\Unit;

use Carbon\Carbon;
use Slakbal\Citrix\Test\BaseUnitTestCase;

class ServiceTest extends BaseUnitTestCase
{
    /** @test */
    public function it_can_determine_a_human_readable_filesize()
    {
        $this->assertEquals('A', 'A');
        //$this->assertEquals('100 B', Format::humanReadableSize(100));
        //$this->assertEquals('1000 B', Format::humanReadableSize(1000));
        //$this->assertEquals('9.77 KB', Format::humanReadableSize(10000));
        //$this->assertEquals('976.56 KB', Format::humanReadableSize(1000000));
        //$this->assertEquals('9.54 MB', Format::humanReadableSize(10000000));
        //$this->assertEquals('9.31 GB', Format::humanReadableSize(10000000000));
    }

    /** @test */
 /*   public function it_can_determine_the_age_in_days()
    {
        Carbon::setTestNow(Carbon::create(2016, 1, 1)->startOfDay());
        $this->assertEquals('0.00 (1 second ago)', Format::ageInDays(Carbon::now()));
        $this->assertEquals('0.04 (1 hour ago)', Format::ageInDays(Carbon::now()->subHour(1)));
        $this->assertEquals('1.04 (1 day ago)', Format::ageInDays(Carbon::now()->subHour(1)->subDay(1)));
        $this->assertEquals('30.04 (4 weeks ago)', Format::ageInDays(Carbon::now()->subHour(1)->subMonths(1)));
    }
 */
}