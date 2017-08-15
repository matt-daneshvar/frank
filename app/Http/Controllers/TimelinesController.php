<?php

namespace Frank\Http\Controllers;

use Frank\Models\Project;
use Frank\Models\Timeline;
use Illuminate\Http\Request;
use MattDaneshvar\Rest\Rest;

class TimelinesController extends Controller
{
    use Rest;

    protected function newModel()
    {
        return new Timeline();
    }
}
