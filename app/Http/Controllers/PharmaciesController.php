<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Cart;




class PharmaciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
        // //

       public function index()
    {
       
        $produit = Produit::paginate(10);

        return view('pharma.index',[

            'produit' => $produit
        ]);
        }



    public function protocole(){
        $protocole = Protocole::paginate(10);

        return view('pharma.protocole',[

            'protocole' => $protocole
        ]);

    }

    public function caisse(){

        $caisse = Cart::orderBy('created_at','desc')->get();

        return view('pharma.caisse',['caisse' => $caisse]);
    }

    public function addtocart(Request $request)
    {

    		// $data = $request->all();
    		Cart::insert([
    			'produit_id' => request('id'),
    			'produit_nom' => request('libelle'),
                'produit_prix' => request('produit_prix'),
                 'qty' => request('qty'),
    			'total' => request('produit_prix') * request('qty'),
                ]);
    		return back();
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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
