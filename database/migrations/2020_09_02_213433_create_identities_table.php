<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_identity', function (Blueprint $table) {
            $table->id();

            $table->string('last_name', 64);
            $table->string('first_name', 64);
            $table->string('middle_name', 64)->nullable();

            $table->date('dob')->useCurrent();
            $table->string('sex', 12)->default('male');

            $table->string('ssn', 24)->nullable();
            $table->string('license', 24)->nullable();

            $table->string('accession_number', 24)->nullable();
            $table->string('marital_status', 12)->nullable();
            $table->string('user_defined', 128)->nullable();

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
        Schema::dropIfExists('patients_identity');
    }
}
