<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Show Login Form
     *
     */
    public function login()
    {
        return view('users.login');
    }


    /**
     * Show Register/Create Form
     *
     */
    public function register()
    {
        return view('users.register');
    }


    //Create New User
    public function store(Request $request)
    {
        //validation
        $formFields = $request->validate([
            'email' => ['required','unique:users,email','email'],
            'fullname' => ['required','min:5'],
            'username' => ['required','unique:users,username','min:5'],
            'password' => ['required','min:5']
        ]);

         // Hash Password
         $formFields['password'] = bcrypt($formFields['password']);

        //store
        User::create($formFields);

        return redirect(route('user.login'));
    }
}
