<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Support_document;
use Faker\Generator as Faker;

$factory->define(Support_document::class, function (Faker $faker) {

    return [
        'course_name' => $faker->word,
        'url' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
