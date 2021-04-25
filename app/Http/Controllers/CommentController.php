<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addComment(Post $post)
    {
        Comment::create([
            'body' => request('body'),
            'post_id' => $post->id,
            'user_id' => Auth()->id()
        ]);

        return back();
    }
}
