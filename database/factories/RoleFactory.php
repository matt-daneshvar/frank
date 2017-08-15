<?php

use Faker\Generator as Faker;

$factory->define(\Frank\Models\Role::class, function (Faker $faker) {
    $name = $faker->sentence(2);

    return [
        'display_name' => $name,
        'name' => str_slug($name)
    ];
});
