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
            $table->integer('NRIC')->unsigned();
            $table->unique('MRN');
            $table->text('Sex');
            $table->float('Height', 3, 2)->nullable();
            $table->float('Weight', 3, 2)->nullable();
            $table->float('BMI', 2,2)->nullable();
            $table->string('Cancer Type');
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
