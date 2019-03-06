<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Protocole;
use App\Produit;
use Yajra\Datatables\Datatables;

class ProtocolesController extends Controller
{
    //


    public function index(){

       $protocole = Protocole::paginate(5);

       $produit = Produit::get();

        return view('protocole.index',[
            
            'protocole' => $protocole,
            'produit' => $produit,
            
        ]);
    }



 public function store(Request $request)
    {

        $protocole = Protocole::create([

            'protocole_nom'=> \request('protocole_nom'),
            'protocole_desc'=> \request('protocole_desc'),
            
        ]);
        return redirect()->back();
    }




    public function show($id)
    {

        $protocole = Protocole::find($id);
        

        return view('protocole.index',[

            'protocole' => $protocole,
            
           
        ]);
        
    }

}