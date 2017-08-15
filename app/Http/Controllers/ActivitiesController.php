<?php

namespace Frank\Http\Controllers;

use Frank\Models\Activity;
use Frank\Models\Project;
use Illuminate\Http\Request;
use MattDaneshvar\Rest\Rest;

class ActivitiesController extends Controller
{
    use Rest;

    protected function newModel()
    {
        return new Activity();
    }

    public function store(Project $project, Request $request)
    {
        $activity = Activity::make($request->only(['name', 'start', 'end']));

        $activity->timeline()->associate($project->timeline);

        $activity->save();

        return back();
    }
}
