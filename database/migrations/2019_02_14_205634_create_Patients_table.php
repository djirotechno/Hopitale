<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        // Schema::create('patients', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('sexe');
        //     $table->string('nom');
        //     $table->string('prenom');
        //     $table->integer('age');
        //     $table->text('adresse');
        //     $table->integer('telephone');
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
        // Schema::drop('patient');
    }
}
