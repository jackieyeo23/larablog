<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        Post::create(request(['title', 'body']));
        //$post = new \App\Post;

        //$post->title = request('title');
        //$post->body = request('body');

        //$post->save();

        return redirect('/');


    }
}
