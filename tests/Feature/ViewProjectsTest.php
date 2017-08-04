<?php

namespace Tests\Feature;

use Frank\Models\Project;
use Frank\Models\Timeline;
use Frank\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewProjectsTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->project = factory(Project::class)->create();
        factory(Timeline::class)->create(['project_id' => $this->project->id]);
    }

    /** @test */
    public function guests_may_not_view_projects()
    {
        $this->get('/')->assertRedirect('/login');
    }

    /** @test */
    public function an_authenticated_user_can_view_all_projects_associated_to_him()
    {
        $this->signIn();

        $this->project->stakeholders()->attach(auth()->id());

        $this->get('/')->assertSee($this->project->name);
    }

    /** @test */
    public function unauthorized_users_may_not_view_a_project_associated_to_him()
    {
        $this->get(action('ProjectsController@show', ['project' => $this->project->id]))->assertRedirect('/login');

        $this->signIn();

        $this->get(action('ProjectsController@show', ['project' => $this->project->id]))->assertStatus(403);
    }

    /** @test */
    public function an_authenticated_user_can_view_a_project_associated_to_him()
    {
        $this->signIn();

        $this->project->stakeholders()->attach(auth()->id());

        $this->get(action('ProjectsController@show', ['project' => $this->project->id]))->assertSee($this->project->name);
    }

    /** @test */
    public function a_user_may_not_view_projects_not_associated_to_him()
    {
        $this->signIn();

        $anotherUser = factory(User::class)->create();

        $this->project->stakeholders()->attach($anotherUser->id);

        $this->get('/')->assertDontSee( $this->project->name);
    }
}
