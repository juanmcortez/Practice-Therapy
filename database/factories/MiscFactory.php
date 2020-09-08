<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Patients\Misc;
use Faker\Generator as Faker;

$factory->define(Misc::class, function (Faker $faker) {
    $typeVal = $faker->randomElement(['date_deceased', 'reason_deceased']);

    return [
        // Patient data
        'patient_id'    => 0,
        'type'          => $typeVal,
        'misc'          => ($typeVal == 'date_deceased') ? $faker->dateTimeThisDecade() : ''
    ];
});
