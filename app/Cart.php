<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //

    protected $guard = [];



     public function produit(){

    	return $this->hasMany(Produit::class);
    }
}
