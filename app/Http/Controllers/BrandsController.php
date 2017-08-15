<?php

namespace Frank\Http\Controllers;

use Frank\Models\Brand;
use Illuminate\Http\Request;
use MattDaneshvar\Rest\Rest;

class BrandsController extends Controller
{
    use Rest;

    protected function newModel()
    {
        return new Brand();
    }
}
