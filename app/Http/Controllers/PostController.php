<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * show all posts
     *
     */
    public function index()
    {
        return view('posts.home');
    }


    /**
     * show form create post
     *
     * @return void
     */
    public function create()
    {
        return view('posts.create');
    }



    /**
     * Store new post
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        //validation
        $formFields = $request->validate([
            // 'another' => "",
            'caption' => ['required'],
            'image' => ['required','image']
        ]);

        $imagePath = request('image')->store('updloads','public');

        $formFields['image'] = $imagePath;

       //
       //auth()->user()->posts()->create($formFields);
       //add user_id
       //$formFields['user_id'] = auth()->user()->id;

       //store post
       auth()->user()->posts()->create($formFields);

       return redirect(route('profile.show',['id' => [auth()->user()->id]]));
    
    }
}
