<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;
use App\Consultation;
use App\Produit;
use App\Protocole;


class DashController extends Controller
{
    //

    public function index(){
        $patient = Patient::get();

        $Fpatient = Patient::where('sexe','M');



        return view('dash.index',compact('patient'),compact('Fpatient'));


    }
}
