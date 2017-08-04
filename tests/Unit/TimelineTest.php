<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Frank\Models\Activity;
use Frank\Models\Timeline;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TimelineTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->timeline = $timeline = factory(Timeline::class)->create();
        factory(Activity::class, 5)->create(['timeline_id' => $this->timeline->id]);
    }

    /** @test */
    public function it_has_many_activities()
    {
        $this->assertInstanceOf(Collection::class, $this->timeline->activities);
    }

    /** @test */
    public function it_has_a_start()
    {
        $this->assertInstanceOf(Carbon::class, $this->timeline->start);
    }

    /** @test */
    public function it_has_an_end()
    {
        $this->assertInstanceOf(Carbon::class, $this->timeline->end);
    }

    /** @test */
    public function its_start_is_before_its_end()
    {
        $this->assertTrue($this->timeline->start->lte($this->timeline->end));
    }

    /** @test */
    public function it_has_a_positive_duration()
    {
        $this->assertInternalType('int', $this->timeline->duration);

        $this->assertGreaterThanOrEqual(0, $this->timeline->duration);
    }

    /** @test */
    public function all_its_activities_fit_within_its_duration()
    {
        foreach($this->timeline->activities as $activity)
        {
            $this->assertTrue($activity->start->gte($this->timeline->start));
            $this->assertTrue($activity->end->lte($this->timeline->end));
        }
    }
}
