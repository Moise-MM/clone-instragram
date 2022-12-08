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


    /**
     * Create New User
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        //validation
        $formFields = $request->validate([
            'email' => ['required','unique:users,email','email'],
            'fullname' => ['required','min:5', 'string'],
            'username' => ['required','unique:users,username','min:5','string'],
            'password' => ['required','min:5']
        ]);

         // Hash Password
         $formFields['password'] = bcrypt($formFields['password']);

        //store
        User::create($formFields);

        return redirect(route('user.login'));
    }



   /**
     * Authenticate User
     *
     * @param Request $request
     */
    public function authenticate(Request $request) {
        //validation
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        //
        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect(route('post.index'));
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }


}
