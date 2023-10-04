<?php

namespace App\Policies;

use App\Models\User;

class ClientRole
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function view(User $user){
        return $user->typeProfil === 'admin';
    }
}
