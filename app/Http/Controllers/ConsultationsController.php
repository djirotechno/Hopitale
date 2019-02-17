<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Protocole;
use App\Consultation;
use App\Produit;


class ConsultationsController extends Controller
{

         // request()->validate([
        //     'name' => 'required|min:6',
        //     'description' => 'required|between:6,500',
        // ]);
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $consult = Consultation::get();
        return view('consultation.index',compact('consult'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $patient = Patient::latest();
        return view('consultation.create',[
            'patient' => $patient,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $consult = Consultation::create([
            'patient_id' => request('patient_id'),
            'observation' => request('observation'),
            'diagnostic' => request('diagnostique'),
            'prescription' => request('prescription'), 
             
        ]);

         return back();
    }

    // enregistrement traitemen
   


   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      
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
        $consult = Consultation::update([
            
           $consult->patient_id = \request()->patient_id,
           $consult->id = \request()->id,
           $consult->observation = \request()->observation,
           $consult->diagnostic = \request()->diagnostic,
           $consult->prescription = \request()->prescription,

           $consult->save()
        ]);
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
