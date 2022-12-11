<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth')->only([
            'show'
        ]);
    }
    
    /**
     * show show user profile
     *
     * @param User $user
     */
    public function show(User $user)
    {
        return view('profiles.show',[
            'user' => $user
        ]);
    }


    
}
