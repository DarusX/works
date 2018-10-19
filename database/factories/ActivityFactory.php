<?php

use Faker\Generator as Faker;
use App\Activity;

$factory->define(Activity::class, function (Faker $faker) {
    return [
        'activity' => $faker->sentence,
        'description' => $faker->randomHtml(2,3)
    ];
});
