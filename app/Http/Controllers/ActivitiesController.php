<?php

namespace Frank\Http\Controllers;

use Frank\Models\Activity;
use Frank\Models\Project;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function store(Project $project, Request $request)
    {
        $activity = Activity::make($request->only(['name', 'start', 'end']));

        $activity->timeline()->associate($project->timeline);

        $activity->save();

        return back();
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();

        return back();
    }
}
