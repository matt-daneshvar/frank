<?php

namespace Frank\Http\Controllers;

use Frank\Models\Brand;
use Frank\Models\Project;
use Frank\Models\Timeline;
use Illuminate\Http\Request;
use MattDaneshvar\Rest\Rest;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects.index', ['projects' => auth()->user()->projects]);
    }

    public function show(Project $project, Request $request)
    {
        return view('projects.show', ['project' => $project]);
    }

    public function store(Brand $brand, Request $request)
    {
        $project = Project::make($request->only(['name']));
        $project->brand()->associate($brand);
        $project->save();

        return back();
    }
}
