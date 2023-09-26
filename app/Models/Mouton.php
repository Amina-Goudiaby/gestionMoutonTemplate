<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouton extends Model
{
    // use HasFactory;
    // public function client(){
    //     return $this->belongsTo(Client::class);
    // }
    
    // public function eleveur(){
    //     return $this->belongsTo(Eleveur::class);
    // }

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'nom',
        'sexe',
        'age',
        'image',
        'description',
        'genealogie',
        'race',
        'prix',
        'status',
        'user_id',
    ];
}
