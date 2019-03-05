<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;

use App\Produit;

use Milon\Barcode\DNS1D;

class CodebarController extends Controller
{
    //



    public function index(){


        $code = Produit::get();

        return view('code',[

            'code' => $code,

        ]);
    }
}
