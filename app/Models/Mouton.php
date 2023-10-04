<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouton extends Model
{
    use HasFactory;

    protected $table = 'moutons';
    public function client(){
        return $this->belongsTo(Client::class);
    }
    
    public function eleveur(){
        return $this->belongsTo(Eleveur::class, 'eleveur_id');
    }

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    protected $fillable = [
        'nom',
        'sexe',
        'age',
        'poids',
        'taille',
        'dateNaissance',
        'image',
        'description',
        'genealogie',
        'race',
        'prix',
        'status',
        'client_id',
        'eleveur_id',
    ];
    // public function getImageAttribute($value)
    // {
    //     if ($value) {
    //         return asset();
    //     }
    // }
} 
