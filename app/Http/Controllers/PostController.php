<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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


    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
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

        //resize image
        $image = Image::make(public_path('storage/'.$imagePath))->fit(1200,1200);
        $image->save();

       //
       //auth()->user()->posts()->create($formFields);
       //add user_id
       //$formFields['user_id'] = auth()->user()->id;

       $formFields['image'] = $imagePath;

       //store post
       auth()->user()->posts()->create($formFields);

       return redirect(route('profile.index',auth()->user()->id));
    
    }

}
