<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
   
    protected $guarded = [];

    public function categorie(){

    	return $this->belongsTo(Categorie::class);
    }


    public function protocole(){

    	return $this->belongsTo(Protocole::class);
    }

}
