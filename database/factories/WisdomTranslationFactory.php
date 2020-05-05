<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Translations\WisdomTranslation;
use Faker\Generator as Faker;

$factory->define(WisdomTranslation::class, function (Faker $faker) {

    return [
        'wisdom_id' => $faker->unique()->numberBetween(1, 10),
        'content' => $faker->sentence(),
        'locale' => 'ar'
    ];
});
