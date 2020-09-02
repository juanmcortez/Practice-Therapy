<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Patients\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        // Patient data
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'middle_name' => $faker->firstName,
        'ext' => $faker->isbn10,
        'dob' => $faker->dateTimeThisCentury,
    ];
});
