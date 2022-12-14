<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth')->except(['index']);
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
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }



    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user->profile);

        //validation
        $formFields = $request->validate([
            'email' => ['required','email'],
            'fullname' => ['required','min:5', 'string'],
            'username' => ['required','min:5','string'],
            'image' => ['image']
        ]);
        

        //update user
        auth()->user()->update($formFields);

        //
        if($request->hasFile('image'))
        {
            $imagePath = request('image')->store('profile','public');

            //resize image
            $image = Image::make(public_path('storage/'.$imagePath))->fit(1000,1000);
            $image->save();
        }


        //update profile
         //update user
         auth()->user()->profile->update([
            'description' => $request->input('description'),
            'url' => $request->input('url'), 
            'image' => $imagePath
         ]);


        return redirect(route('profile.index', auth()->user()->id));

        
    }


    
}
