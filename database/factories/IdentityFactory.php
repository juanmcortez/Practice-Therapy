<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Patients\Identity;
use Faker\Generator as Faker;

$factory->define(Identity::class, function (Faker $faker) {
    $rndSex = $faker->randomElement(['male', 'female']);
    return [
        // Patient data
        'dob'               => $faker->dateTimeThisCentury,
        'sex'               => $rndSex,
        'ssn'               => $faker->numerify('###-##-####'),
        'license'           => $faker->randomElement([null, $faker->randomLetter . $faker->numerify('###-####-####-##')]),
    ];
});
