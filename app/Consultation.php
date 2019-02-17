<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    //


    protected $guarded = [];



    public function patient(){

        return $this->belongsTo(Patient::Class);
    }
}
