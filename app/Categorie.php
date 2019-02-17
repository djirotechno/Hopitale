<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //

    
    protected $fillable = ['categorie_nom'];



     public function produit(){

    	return $this->hasMany(Produit::class);
    }
}
