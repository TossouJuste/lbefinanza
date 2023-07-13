<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formulaire extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            
            'nom'    => 'required|min:3',
            'prenom' => 'required|min:3',
            'email'  => 'email|required',
            'telephone' => 'required|min:8',
            'pays' => 'required',
            'codePostal' => 'required|min:5',

        ];
    }
    public function messages()
    {
        return [

            'nom.required' => 'Le champ nom est requis',
            'nom.min' => 'Votre nom doit comporter au moins trois caractères.',

            'prenom.required' => 'Le champ prenom est requis',
            'prenom.min' => 'Votre prenom doit comporter au moins trois caractères.',

            'email.required' => 'Le champ email est requis ' ,
            'email.email' => 'votre courriel doit être au format exemple@gmail.com.',

            'telephone.required' => 'Le champs telephone est requis',
            'telephone.min' => 'Votre numero de telephone doit contenir au moins huit chiffre',

           
            'pays.required' => 'Le champ pays est requis',

            'codePostal.min' => 'Le codePostal doit contenir au moins cinq chiffres',
            'codePostal.required' => 'Le champs code postal est requis',
          

            

            
        ];
    }
}


