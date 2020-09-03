<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Patients\Selection;
use Faker\Generator as Faker;

$factory->define(Selection::class, function (Faker $faker) {
    $typeVal = $faker->randomElement(
        [
            'acce_numb', 'rend_prov', 'refr_prov', 'phar_name', 'stat_supr',
            'hipaa_not', 'allow_voi', 'allow_mai', 'allow_ema', 'allow_voi',
            'allow_reg', 'allow_sha', 'allow_exc', 'allow_por', 'allow_sms',
            'leave_msg'
        ]
    );

    $typeSel = ($typeVal != 'rend_prov' || $typeVal != 'refr_prov' || $typeVal != 'phar_name' || $typeVal != 'leave_msg')
        ? $faker->randomElement([true, false])
        : '';

    return [
        // Patient data
        'type'          => $typeVal,
        'selection'     => $typeSel
    ];
});
