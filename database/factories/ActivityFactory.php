<?php

use Faker\Generator as Faker;

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

$factory->define(Frank\Models\Activity::class, function (Faker $faker) {
    $date = \Carbon\Carbon::today();
    $start = $date->addDays(rand(0,100))->toDateString();
    $end = $date->addDays(rand(0,2) == 1 ? 0 : rand(0,100))->toDateString();

    return [
        'name' => $faker->sentence(3),
        'start' => $start,
        'end' => $end,
        'timeline_id' => rand(1,10)
    ];
});
