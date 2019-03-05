<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    //  Schema::create('carts', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->string('produit_id');
    //         $table->string('produit_nom');
    //         $table->string('produit_prix');
    //         $table->decimal('total');
    //         $table->boolean('valide')->nullable()->default(false);
    //         $table->decimal('qty');
    //         $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        // Schema::dropIfExists('Carts');
    }
}
