<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protocole extends Model
{ 
    
    protected $fillable = ['id','protocole_nom','protocole_desc'];



    // public function produit(){

    // 	return $this->hasOne(Produit::class);
    // }


    public function produits(){

        return $this->hasMany(Produit::class);
    }

}
