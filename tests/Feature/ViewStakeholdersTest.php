<?php

namespace Tests\Feature;

use Frank\Models\Project;
use Frank\Models\Timeline;
use Frank\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewStakeholdersTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->project = factory(Project::class)->create();
        $this->timeline = factory(Timeline::class)->create(['project_id' => $this->project->id]);
    }

    /** @test */
    public function a_user_can_view_the_stakeholders_of_a_project_associated_to_him()
    {
        $this->signIn();

        $anotherStakeholder = factory(User::class)->create();

        $this->project->stakeholders()->attach([auth()->id(), $anotherStakeholder->id]);

        $this->get(action('ProjectsController@show', ['project' => $this->project->id]))
            ->assertSee($anotherStakeholder->name);
    }
}
