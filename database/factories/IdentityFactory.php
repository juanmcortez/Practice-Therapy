<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Patients\Identity;
use Faker\Generator as Faker;

$factory->define(Identity::class, function (Faker $faker) {
    $rndSex = $faker->randomElement(['male', 'female']);
    return [
        // Patient data
        'last_name'         => $faker->lastName,
        'first_name'        => ($rndSex == 'male') ? $faker->firstNameMale : $faker->firstNameFemale,
        'middle_name'       => ($rndSex == 'male') ? $faker->firstNameMale : $faker->firstNameFemale,
        'dob'               => $faker->dateTimeThisCentury,
        'sex'               => $rndSex,
        'ssn'               => $faker->numerify('###-##-####'),
        'license'           => $faker->randomElement([null, $faker->randomLetter . $faker->numerify('###-####-####-##')]),
        'accession_number'  => $faker->randomElement([null, $faker->randomLetter . $faker->numerify('##-#####')]),
    ];
});
