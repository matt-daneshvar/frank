<?php

namespace Tests\Feature;

use Frank\Models\Activity;
use Frank\Models\Project;
use Frank\Models\Timeline;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewTimelinesTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->project = factory(Project::class)->create();
        $this->timeline = factory(Timeline::class)->create(['project_id' => $this->project->id]);
        factory(Activity::class)->create(['timeline_id' => $this->timeline->id]);
    }

    /** @test */
    public function a_user_can_view_the_timeline_of_a_project_associated_to_him()
    {
        $this->signIn();

        $this->project->stakeholders()->attach(auth()->id());

        $this->get(action('ProjectsController@show', ['project' => $this->project->id]))
            ->assertSee($this->timeline->activities->first()->name);
    }
}
