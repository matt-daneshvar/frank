<?php

use Faker\Generator as Faker;
use Frank\Models\Status;

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

$factory->define(\Frank\Models\Project::class, function (Faker $faker) {
    $status = Status::find(rand(1,4));

    if($status === null)
    {
        $status = factory(\Frank\Models\Status::class)->create();
    }

    return [
        'name' => $faker->sentence(3),
        'brand_id' => factory(\Frank\Models\Brand::class)->create(),
        'status_id' => $status
    ];
});
