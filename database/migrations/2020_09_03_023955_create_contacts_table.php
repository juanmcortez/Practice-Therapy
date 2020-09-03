<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_contact', function (Blueprint $table) {
            $table->id();

            $table->string('relation', 9)->nullable()->comment('mother / father / family / guardian / emergency');

            $table->string('last_name', 64)->nullable();
            $table->string('first_name', 64)->nullable();
            $table->string('middle_name', 64)->nullable();

            $table->string('type', 9)->nullable()->comment('home / mobile / work / emergency');
            $table->string('phone', 32)->nullable();
            $table->string('email', 128)->nullable();

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
        Schema::dropIfExists('patients_contact');
    }
}
