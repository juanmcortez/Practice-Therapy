<?php

use App\Http\Models\Patients\Patient;
use App\Http\Models\Patients\Contact;
use App\Http\Models\Patients\Misc;
use App\Http\Models\Patients\Option;
use App\Http\Models\Patients\Selection;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Patient::class, 13689)->create();
        factory(Patient::class, 13689)->create()->each(
            function ($patient) {
                $rndItems = random_int(1, 5);
                factory(Contact::class, $rndItems)->create(['patient_id' => $patient->pid]);
                $rndItems = random_int(1, 2);
                factory(Misc::class, $rndItems)->create(['patient_id' => $patient->pid]);
                $rndItems = random_int(1, 11);
                factory(Option::class, $rndItems)->create(['patient_id' => $patient->pid]);
                $rndItems = random_int(1, 16);
                factory(Selection::class, $rndItems)->create(['patient_id' => $patient->pid]);
            }
        );
    }
}
