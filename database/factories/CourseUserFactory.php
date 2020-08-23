<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CourseUser;
use Faker\Generator as Faker;

$factory->define(CourseUser::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'course_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'course_name' => $faker->word,
        'introduction' => $faker->word,
        'description' => $faker->text,
        'assign_date' => $faker->date('Y-m-d H:i:s'),
        'expire_date' => $faker->date('Y-m-d H:i:s'),
        'course_url1' => $faker->word,
        'course_url2' => $faker->word,
        'course_url3' => $faker->word,
        'course_url4' => $faker->word,
        'course_url5' => $faker->word,
        'exam_url' => $faker->word,
        'resources' => $faker->text,
        'paid_amount' => $faker->randomDigitNotNull,
        'status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
