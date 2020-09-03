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

            $table->string('ext_id', 64)->default('xx-xxxx-xxxx');

            $table->unsignedInteger('identity_id')->nullable();
            $table->unsignedInteger('address_id')->nullable();
            $table->unsignedInteger('contact_id')->nullable();
            $table->unsignedInteger('employment_id')->nullable();
            $table->unsignedInteger('selection_id')->nullable();
            $table->unsignedInteger('option_id')->nullable();
            $table->unsignedInteger('misc_id')->nullable();

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
