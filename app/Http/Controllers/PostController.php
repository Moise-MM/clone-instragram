<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only([
            'index',
        ]);
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
}
