<?php

use Faker\Generator as Faker;
use Frank\Models\Project;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\Frank\Models\Timeline::class, function (Faker $faker) {
    $project = Project::find(rand(1,4));

    if($project === null)
    {
        $project = factory(\Frank\Models\Project::class)->create();
    }

    return [
        'project_id' => $project->id
    ];
});
