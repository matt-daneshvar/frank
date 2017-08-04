<?php

namespace Frank\Http\Controllers;

use Frank\Models\Project;
use Frank\Models\Timeline;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects.index', ['projects' => auth()->user()->projects]);
    }

    public function show(Project $project, Request $request)
    {
        if(!$project->stakeholders->contains($request->user()->id))
        {
            abort(403);
        }

        return view('projects.show', ['project' => $project]);
    }
}
