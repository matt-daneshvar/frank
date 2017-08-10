<?php

namespace Frank\Http\Controllers;

use Frank\Models\Project;
use Illuminate\Http\Request;

class TimelinesController extends Controller
{
    public function show(Project $project)
    {
        return view('timelines.show', ['timeline' => $project->timeline]);
    }
}
