<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }
    
    /**
     * show show user profile
     *
     * @param User $user
     */
    public function index(User $user)
    {
        return view('profiles.index',[
            'user' => $user
        ]);
    }


    
}
