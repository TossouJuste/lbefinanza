<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateRegister extends FormRequest
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
            'email'  => 'email|required|unique:users',
            'telephone' => 'required|min:8',
            'civilite' =>  'required',
            'pays' => 'required',
            'devise' =>'required',
            'password' => 'required|confirmed|min:8|string',
            'check' => 'required',
            'piece' => 'required'
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
            'email.unique' => 'Ce mail existe déja',

            'telephone.required' => 'Le champs telephone est requis',
            'telephone.min' => 'Votre numero de telephone doit contenir au moins huit chiffre',

            'civilite.required' => 'Le champ civilite est requis',
            'pays.required' => 'Le champ pays est requis',
            'devise.required' => 'Le champ devise est requis',

            'password.required' => 'Le champ mots de pass  est requis',
            'password.confirmed' => 'Les mots de passe ne sont  pas identique.',
            'password.min' => 'Votre mots de pass doit comporter au moins huit caractères',

            'check'=> 'Veuillez acceptez nos conditions d\'utilisation.',
            'piece'=> 'Veuillez ajouter une photo de votre pièce d\'identité'

        ];
    }
}
