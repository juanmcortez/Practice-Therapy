<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('pid')->unique();
            $table->string('ext', 64)->default('xx-xxxx-xxxx');

            $table->string('last_name', 64);
            $table->string('first_name', 64);
            $table->string('middle_name', 64)->nullable();

            $table->date('dob')->useCurrent();

            $table->index(['last_name', 'first_name', 'dob']);

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
        Schema::dropIfExists('patients');
    }
}
