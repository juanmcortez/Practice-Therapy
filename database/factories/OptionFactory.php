<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Patients\Option;
use Faker\Generator as Faker;

$factory->define(Option::class, function (Faker $faker) {
    $typeVal = $faker->randomElement(
        [
            'language', 'race', 'ethnicity', 'family_size', 'financial_date',
            'monthly_income', 'homeless', 'interpreter', 'migrant', 'referral_src',
            'vfc'
        ]
    );

    return [
        // Patient data
        'type'      => $typeVal,
        'option'    => ($typeVal == 'financial_date') ? $faker->dateTimeThisDecade() : ''
    ];
});
