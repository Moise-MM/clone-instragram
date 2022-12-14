<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
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
        return view('profiles.index',compact('user'));
    }


    /**
     * show edit form
     *
     * @param User $user
     * @return void
     */
    public function edit(User $user)
    {   
        return view('profiles.edit', compact('user'));
    }



    public function update(Request $request, User $user)
    {
        //validation
        $formFields = $request->validate([
            'email' => ['required','email'],
            'fullname' => ['required','min:5', 'string'],
            'username' => ['required','min:5','string'],
        ]);
        
        //get profile user
        $profile = Profile::find($user->profile->id);

        //update user
        $user->update($formFields);

        //update profile
        $profile->update([
            'description' => $request->input('description'),
            'url' => $request->input('url'),
            'user_id' => $user->id
        ]);

        return redirect(route('profile.index', $user->id));

        
    }


    
}
