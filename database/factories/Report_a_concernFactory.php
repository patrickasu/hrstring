<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Report_a_concern;
use Faker\Generator as Faker;

$factory->define(Report_a_concern::class, function (Faker $faker) {

    return [
        'subject' => $faker->word,
        'message' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
