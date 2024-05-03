<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show(Comment $comment)
    {
        //
    }

    public function edit(Comment $comment)
    {
        //
    }

    public function update(Comment $comment)
    {
        $comment->isActive = 0;

        $comment->update();

        return back()->with('success', 'Commentaire bloque avec succes');
    }

    public function unlock(int $id)
    {
        $comment = Comment::where('id', $id)->first();

        $comment->isActive = 1;

        $comment->update();

        return back()->with('success', 'Commentaire debloque avec succes');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return back()->with('success', 'Commentaire supprime avec succes');
    }
}
