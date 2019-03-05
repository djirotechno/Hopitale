<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        // Schema::create('produits', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('code');
        //     $table->date('date_fab');
        //     $table->string('libelle')->unique();
        //     $table->integer('stock');
        //     $table->integer('prix');
        //     $table->string('indication');
        //     $table->string('formule');
        //     $table->string('recommandation');
        //     $table->unsignedInteger('categorie_id')->index();
        //     $table->Integer('protocole_id')->index();
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
        // Schema::dropIfExists('produits');
    }
}
