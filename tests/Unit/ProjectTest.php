<?php

namespace Tests\Unit;

use Frank\Models\Project;
use Frank\Models\Status;
use Frank\Models\Timeline;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProjectTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_has_many_stakeholders()
    {
        $project = factory(Project::class)->create();

        $this->assertInstanceOf(Collection::class, $project->stakeholders);
    }

    /** @test */
    public function it_has_a_status()
    {
        $project = factory(Project::class)->create();

        $this->assertInstanceOf(Status::class, $project->status);
    }

    /** @test */
    public function it_has_a_timeline()
    {
        $project = factory(Project::class)->create();

        $timeline = factory(Timeline::class)->create();

        $project->timeline()->save($timeline);

        $this->assertInstanceOf(Timeline::class, $project->timeline);
    }

    /** @test */
    public function it_has_many_links()
    {
        $project = factory(Project::class)->create();

        $this->assertInstanceOf(Collection::class, $project->links);
    }
}
