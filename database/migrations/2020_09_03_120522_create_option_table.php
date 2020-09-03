<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_option', function (Blueprint $table) {
            $table->id();

            $table->string('type', 18)->nullable()->comment('language / race / ethnicity / family_size / financial_date / monthly_income / homeless / interpreter / migrant / referral_src / vfc');

            $table->string('option', 128)->nullable();

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
        Schema::dropIfExists('patients_option');
    }
}
