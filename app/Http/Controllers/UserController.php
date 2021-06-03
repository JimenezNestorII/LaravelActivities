<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $post = Post::get();
        return view('user.index', compact('post'));
    }
    public function show(User $post)
    {
        //
        $post = Post::find($post);
        return view('user.show', compact('user'));
    }
}
