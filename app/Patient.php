<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //

    protected $guarded = [];



    public function consultation(){

        return $this->hasMany(Consultation::Class);
    }
}
