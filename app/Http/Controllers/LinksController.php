<?php

namespace Frank\Http\Controllers;

use Frank\Models\Link;
use Frank\Models\Project;
use Illuminate\Http\Request;
use MattDaneshvar\Rest\Rest;

class LinksController extends Controller
{
    use Rest;

    protected function newModel()
    {
        return new Link();
    }

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
}
