<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Patients\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    $rndSex = $faker->randomElement(['male', 'female']);

    $relation = ($rndSex == 'male')
        ? $faker->randomElement(['father', 'family', 'guardian', 'emergency'])
        : $faker->randomElement(['mother', 'family', 'guardian', 'emergency']);

    return [
        // Patient data
        'patient_id'    => 0,
        'relation'      => $relation,
        'last_name'     => $faker->lastName,
        'first_name'    => ($rndSex == 'male') ? $faker->firstNameMale : $faker->firstNameFemale,
        'middle_name'   => ($rndSex == 'male') ? $faker->firstNameMale : $faker->firstNameFemale,
        'type'          => $faker->randomElement(['home', 'mobile', 'emergency']),
        'phone'         => $faker->numerify('###-###-####'),
        'email'         => $faker->randomElement([null, $faker->safeEmail]),
    ];
});
