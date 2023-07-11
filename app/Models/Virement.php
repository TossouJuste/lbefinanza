<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Virement extends Model
{
    use HasFactory;
    public $fillable=[
        'user_id',
        'pays',
        'banque',
        'iban',
        'bic',
        'intitule_compte',
        'montant'
    ];
    public function user()
    {   
        return $this->belongsTo(User::class);
    }
}
