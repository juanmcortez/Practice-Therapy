<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Patients\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        // Patient data
        'address_1'         => $faker->streetAddress,
        'address_2'         => $faker->randomElement([null, $faker->secondaryAddress]),
        'city'              => $faker->city,
        'state'             => $faker->state,
        'zip'               => $faker->postcode,
        'country'           => 'US',
    ];
});
