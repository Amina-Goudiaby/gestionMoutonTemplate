<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleveur extends Model
{
    use HasFactory;

protected $table = 'eleveurs';

    protected $fillable = [
        'user_id',
    ];

    public function user(){
        return $this->hasOne(User::class,'id', 'user_id');
    }

    public function moutons(){
        return $this->hasMany(Mouton::class, 'mouton_id');
    }
}
