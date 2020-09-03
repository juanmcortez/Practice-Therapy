<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_selection', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('patient_id')->nullable();

            $table->string('type', 9)->nullable()->comment('acce_numb / rend_prov / refr_prov / phar_name / stat_supr / hipaa_not / allow_voi / allow_mai / allow_ema / allow_voi / allow_reg / allow_sha / allow_exc / allow_por / allow_sms / leave_msg');

            $table->string('selection', 128)->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients_selection');
    }
}
