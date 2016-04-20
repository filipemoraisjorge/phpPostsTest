<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::paginate(10);
        return view('index', ['posts' => $posts]);
    }
    
    public function show($postId)
    {
        $post = Post::findOrFail($postId);
        
        return view('show', ['post' => $post]);
    }
}
