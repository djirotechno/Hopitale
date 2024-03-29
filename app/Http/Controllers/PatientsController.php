<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Consultation;
use App\Produit;
use App\Protocole;
use App\Http\Requests\FormesRequest;


class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $idpatient = Consultation::get();
        $patient = Patient::orderBy('id', 'desc')->paginate(5);
        return view('patient.index',[

            'patient' => $patient,
            'idpatient' => $idpatient,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $patient = Patient::create(request()->all());
        return redirect('/patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $protocole = Protocole::get();
        $produit = Produit::get();
         $patient = Patient::find($id);
        $consult = Patient::find($id)->consultation;
        $lastconsult = Consultation::latest()->get();
        
    
    

      
             return view('patient.show',[
            
          'patient' => $patient,
          'protocole' => $protocole,
          'produit' => $produit,
          'consult' => $consult,
           'lastconsult' => $lastconsult,
         
         
         
            
            
            ]);
        

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
