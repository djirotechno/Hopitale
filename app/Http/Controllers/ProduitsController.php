<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categorie;
use Validator;
use Response;
use App\Produit;
use App\Protocole;

class ProduitsController extends Controller
{
    /*
    @var array
    */
    protected $rules =
    [
        'libelle' => 'required|min:2|max:32|regex:/^[a-z ,.\'-]+$/i',
        'content' => 'required|min:2|max:128|regex:/^[a-z ,.\'-]+$/i'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = Categorie::get();
        $protocole = Protocole::get();
        $produit = Produit::orderBy('id', 'desc')->paginate(5);
        return view('produit.index',[
            'protocole'=> $protocole,
            'produit' => $produit,
            'categorie' => $categorie,
        ] );
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
       
         $produit = Produit::create([

            'libelle'=> \request('libelle'),
            'code'=> \request('code'),
            'date_fab'=> \request('date_fab'),
            'formule'=> \request('formule'),
            'indication'=> \request('indication'),
            'recommandation'=> \request('recommandation'),
            'prix'=> \request('prix'),
            'stock'=> \request('stock'),
            'categorie_id'=> \request('categorie_id'),
            'protocole_id'=> \request('protocole_id'),
            
        ]);
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $post = Post::findOrFail($id);
        // $post->delete();
        // return response()->json($post);
    }
    /**
     * Change resource status.
     *
     * @return \Illuminate\Http\Response
     */
    
}
