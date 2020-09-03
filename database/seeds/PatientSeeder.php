<?php

use App\Http\Models\Patients\Patient;
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
        //factory(Patient::class, 13689)->create();
        factory(Patient::class, 50)->create();
    }
}
