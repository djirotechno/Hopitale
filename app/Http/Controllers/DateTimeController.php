<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class DateTimeController extends Controller
{
    //


  
public function date(){

   
    $today = Carbon::today();

   

    return view('layouts.navbar',compact('current'));

}


}
