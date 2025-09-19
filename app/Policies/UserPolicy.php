<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    } 
    public function before(){
        if(Auth::check() and Auth::user()->role_id == 3){
            return true;
        }
    }
    public function adminorwriter()
    {
        if (Auth::user()->role_id == 2 or Auth::user()->role_id == 3) {
            return true;
        }
        return false;
    }
    public function admin()
    {
        if (Auth::user()->role_id == 3) {
            return true;
        }
        return false;
    }
    public function writer(User $user)
    {
        if (Auth::user()->role_id == 2) {
            return true;
        }
        return false;
    }
}
