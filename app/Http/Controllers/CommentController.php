<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\InvalidTag;

class CommentController extends Controller
{

    const RULES = [
        'name' => 'required|min:3|max:64',
        'comment' => 'required|min:3|max:256',
    ];

    const MESSAGES = [
        'name.required' => 'The user\'s name is required.',
        'comment.required' => 'The comment cannot be blank.',
    ];

    public function index()
    {
        $comments = Comment::paginate (5);
        return view ('index', compact('comments'));
    }

    public function create()
    {
        return view ('comments.create');
    }

    public function store(Request $request)
    {
        $request -> validate (self::RULES, self::MESSAGES);
        Comment::create([
           'name' => $request -> input ('name'),
           'comment' => $request -> input ('comment'),
           'likes' => 0,
        ]);

        return redirect () -> action ('CommentController@index');
    }

    public function show(Comment $comment)
    {
        return view ('comments.show', compact ('comment'));
    }

    public function edit(Comment $comment)
    {
        return view ('comments.edit', compact ('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $request -> validate (self::RULES, self::MESSAGES);
        $comment -> update (['comment' => $request -> comment]);

        return redirect () -> action ('CommentController@index');
    }

    public function destroy(Comment $comment)
    {
        $comment -> delete ();

        return redirect () -> action ('CommentController@index');
    }
}
