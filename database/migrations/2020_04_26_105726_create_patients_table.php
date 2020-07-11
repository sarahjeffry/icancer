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
        Schema::create('Patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name');
            $table->string('NRIC');
            $table->string('MRN')->unique();
            $table->text('Sex');
            $table->float('Height')->nullable();
            $table->float('Weight')->nullable();
            $table->float('BMI')->nullable();
            $table->string('Type');
            $table->string('Smoking')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Patients');
    }
}
