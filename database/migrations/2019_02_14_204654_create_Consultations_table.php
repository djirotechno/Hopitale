<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        // Schema::create('consultations', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->text('diagnostic');
           
        //     $table->text('observation');
        //     $table->string('prescription');
        //     $table->unsignedInteger('patient_id')->index();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        // Schema::dropIfExists('consultations');
    }
}
