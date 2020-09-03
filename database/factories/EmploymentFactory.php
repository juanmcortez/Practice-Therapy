<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Patients\Employment;
use Faker\Generator as Faker;

$factory->define(Employment::class, function (Faker $faker) {
    $rndSex = $faker->randomElement(['male', 'female']);
    return [
        // Patient data
        'occupation'        => $faker->randomElement([null, $faker->jobTitle]),
        'last_name'         => $faker->lastName,
        'first_name'        => ($rndSex == 'male') ? $faker->firstNameMale : $faker->firstNameFemale,
        'middle_name'       => ($rndSex == 'male') ? $faker->firstNameMale : $faker->firstNameFemale,
        'phone'             => $faker->randomElement([null, $faker->numerify('###-###-####')]),
        'address_1'         => $faker->streetAddress,
        'address_2'         => $faker->randomElement([null, $faker->secondaryAddress]),
        'city'              => $faker->city,
        'state'             => $faker->state,
        'zip'               => $faker->postcode,
        'country'           => 'US',
    ];
});
