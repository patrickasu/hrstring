<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Createcourse;
use Faker\Generator as Faker;

$factory->define(Createcourse::class, function (Faker $faker) {

    return [
        'course_name' => $faker->word,
        'category_id' => $faker->randomDigitNotNull,
        'introduction' => $faker->word,
        'description' => $faker->text,
        'course_url1' => $faker->word,
        'course_url2' => $faker->word,
        'course_url3' => $faker->word,
        'course_url4' => $faker->word,
        'course_url5' => $faker->word,
        'exam_url' => $faker->word,
        'resources' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
