<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class FormesRequest extends FormRequest
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
            //
            //validation formulaire patient
             'nom'=> 'required|min:4|max:32|regex:/^[a-z ,.\'-]+$/i',
            'prenom'=> 'required|min:2|max:32|regex:/^[a-z ,.\'-]+$/i',
            'age'=> 'required|min:1',
            'telephone'=>'required|min:7',
            'adresse'=> 'required|min:20|max:132|regex:/^[a-z ,.\'-]+$/i',


             //validationformulaire consultation
            'observation' => 'required|min:5|max:132|regex:/^[a-z ,.\'-]+$/i',
            'diagnostic' => 'required|min:5|max:32|regex:/^[a-z ,.\'-]+$/i',
        ];
    }

    public function message(){

        return [

            //validation formulaire patient
           'nom.required'=> "nom obligatoire",
            'prenom.required'=> "prenom obligatoire",
            'age.required'=> "age obligatoire",
            'telephone.required'=>"tel obligatoire",
            'telephone.min'=>"numero invalide",
            'adresse.required'=> "adresse obligatoire",
            /**************************************** */

            //validationformulaire consultation
            
            'observation.required' => "observation obligatoire",
            'diagnostic.required' => "diagnostic obligatoire",
            
        ];
    }
}
