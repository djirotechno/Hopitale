<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Auth\LoginsRequestController;

class LoginsRequestController extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'email' => 'required|email',
            'password' => 'required|min:6',
            //
        ];
    }



    public function message(){

        return[
             'email.required' => "obligatoire",
             'email.email' => "email invalide",
             'password.required' => "mot de passe obligatoire",
             'password.min' => "invalide doit contenir 6 carataire ou plus",

        ];

       
    }
}
