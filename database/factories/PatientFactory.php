<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Patients\Patient;
use App\Http\Models\Patients\Address;
use App\Http\Models\Patients\Employment;
use App\Http\Models\Patients\Identity;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        // Patient data
        'ext_id'        => $faker->isbn10,
        // Patient relations
        'address_id'    => factory(Address::class)->create()->id,
        'employment_id' => factory(Employment::class)->create()->id,
        'identity_id'   => factory(Identity::class)->create()->id,
    ];
});
