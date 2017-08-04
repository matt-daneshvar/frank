<?php

namespace Tests\Unit;

use Frank\Models\Activity;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ActivityTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_has_a_duration()
    {
        $activity = factory(Activity::class)->create();

        $this->assertInternalType('int', $activity->duration);

        $this->assertGreaterThanOrEqual(0, $activity->duration);
    }
}
