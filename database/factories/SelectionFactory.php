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

    switch ($typeVal) {
        case 'acce_numb':
            $typeSel = strtoupper($faker->randomLetter) . $faker->numerify('##-#####');
            break;
        case 'rend_prov':
        case 'refr_prov':
        case 'phar_name':
        case 'leave_msg':
            $typeSel = '';
            break;
        default:
            $typeSel = $faker->randomElement([true, false]);
            break;
    }

    return [
        // Patient data
        'patient_id'    => 0,
        'type'          => $typeVal,
        'selection'     => $typeSel
    ];
});
