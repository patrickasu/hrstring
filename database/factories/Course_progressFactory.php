<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course_progress;
use Faker\Generator as Faker;

$factory->define(Course_progress::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'course_id' => $faker->randomDigitNotNull,
        'assign_date' => $faker->date('Y-m-d H:i:s'),
        'start_date' => $faker->date('Y-m-d H:i:s'),
        'completed_date' => $faker->date('Y-m-d H:i:s'),
        'status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
