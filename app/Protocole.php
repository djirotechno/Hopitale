<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protocole extends Model
{ 
    
    protected $fillable = ['protocole_nom','protocole_desc'];



    


    public function produits(){

        return $this->hasMany(Produit::class);
    }

}
