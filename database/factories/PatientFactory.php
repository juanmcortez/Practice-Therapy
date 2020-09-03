<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Patients\Patient;
use App\Http\Models\Patients\Address;
use App\Http\Models\Patients\Contact;
use App\Http\Models\Patients\Employment;
use App\Http\Models\Patients\Identity;
use App\Http\Models\Patients\Misc;
use App\Http\Models\Patients\Option;
use App\Http\Models\Patients\Selection;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        // Patient data
        'ext_id'        => $faker->isbn10,
        // Patient relations
        'address_id'    => factory(Address::class)->create()->id,
        'contact_id'    => factory(Contact::class)->create()->id,
        'employment_id' => factory(Employment::class)->create()->id,
        'identity_id'   => factory(Identity::class)->create()->id,
        'misc_id'       => factory(Misc::class)->create()->id,
        'option_id'     => factory(Option::class)->create()->id,
        'selection_id'  => factory(Selection::class)->create()->id,
    ];
});
