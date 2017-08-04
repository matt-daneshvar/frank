<?php

namespace Tests\Feature;

use Frank\Models\Link;
use Frank\Models\Project;
use Frank\Models\Timeline;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewLinksTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->project = factory(Project::class)->create();
        factory(Timeline::class)->create(['project_id' => $this->project->id]);
    }

    /** @test */
    public function a_user_can_view_links_of_a_project_associated_to_him()
    {
        $this->signIn();

        $this->project->stakeholders()->attach(auth()->id());

        $link = factory(Link::class)->create();

        $this->project->links()->save($link);

        $this->get(action('ProjectsController@show', ['project' => $this->project->id]))->assertSee($link->name);
    }
}
