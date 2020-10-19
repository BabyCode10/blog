<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user', 'comments')->take(5)->get();

        return view('welcome', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::with('comments')->where('slug', $slug)->first();

        return view('pages.detail', compact('post'));
    }
}
