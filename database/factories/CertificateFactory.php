<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Certificate;
use Faker\Generator as Faker;

$factory->define(Certificate::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'course_id' => $faker->word,
        'assign_date' => $faker->date('Y-m-d H:i:s'),
        'percentage' => $faker->word,
        'certificate_status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
