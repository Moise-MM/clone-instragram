<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * show all posts
     *
     */
    public function index()
    {
        return view('posts.home');
    }
}
