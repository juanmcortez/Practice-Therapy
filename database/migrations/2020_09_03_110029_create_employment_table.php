<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_employment', function (Blueprint $table) {
            $table->id();

            $table->string('occupation', 128)->nullable();

            $table->string('last_name', 64)->nullable();
            $table->string('first_name', 64)->nullable();
            $table->string('middle_name', 64)->nullable();

            $table->string('phone', 32)->nullable();

            $table->string('address_1', 128)->nullable();
            $table->string('address_2', 128)->nullable();

            $table->string('city', 64)->nullable();
            $table->string('state', 64)->nullable();
            $table->string('zip', 64)->nullable();

            $table->string('country', 64)->nullable();

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
        Schema::dropIfExists('patients_employment');
    }
}
