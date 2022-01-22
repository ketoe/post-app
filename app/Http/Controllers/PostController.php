<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
        $data = array();
        $data['posts'] = Post::simplePaginate(10);
        return view('post.index', $data);   
    }

    public function view ($id)
    {
        $data = array();
        $data['post'] = Post::findOrFail($id);
        return view('post.show', $data);   
    }

    public function edit ()
    {
        return view('post.edit');
    }

    public function create (): View
    {
        return view('post.create');
    }
}
