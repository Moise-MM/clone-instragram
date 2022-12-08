<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only([
            'index',
        ]);
    }
    
    public function index()
    {
        return view('usersPosts.index');
    }
}
