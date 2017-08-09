<?php

namespace Frank\Http\Controllers;

use Frank\Models\Link;
use Frank\Models\Project;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index(Project $project)
    {
        return view('links.index', ['links' => $project->links, 'project' => $project]);
    }

    public function store(Project $project, Request $request)
    {
        $link = Link::make($request->only(['name', 'url']));
        $link->project()->associate($project);
        $link->save();

        return back();
    }

    public function destroy(Link $link)
    {
        $link->delete();

        return back();
    }
}
