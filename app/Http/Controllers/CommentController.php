<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'website' => 'nullable',
            'comment' => 'required',
        ]);

        $post = Post::findOrFail($request->post_id);

        $comment = Comment::create([
            'post_id' => $post->id,
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('store', "Created comment $post->title successful");
    }
}
