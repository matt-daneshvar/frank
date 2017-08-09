<?php

namespace Frank\Http\Controllers;

use Frank\Models\Project;
use Frank\Models\User;
use Illuminate\Http\Request;

class StakeholdersController extends Controller
{
    public function index(Project $project)
    {
        return view('stakeholders.index', ['stakeholders' => $project->stakeholders, 'project' => $project]);
    }

    public function store(Project $project, Request $request)
    {
        $project->stakeholders()->sync([$request->get('stakeholder')], false);

        return back();
    }

    public function destroy(Project $project, User $stakeholder)
    {
        $project->stakeholders()->detach([$stakeholder->id]);

        return back();
    }
}
