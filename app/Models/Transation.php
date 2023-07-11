<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transation extends Model
{
    use HasFactory;

    public $fillable=[
        'user_id',
        'id_transation_banque',
        'nom_banque',
        'date_heure',
        'motif',
        'montant'
    ];
    public function user()
    {   
        return $this->belongsTo(User::class);
    }
}
