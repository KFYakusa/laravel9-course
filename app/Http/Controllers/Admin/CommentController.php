<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    protected $comment;
    protected $user;

    public function __construct(Comment $comment,User $user)
    {
        $this->comment = $comment;
        $this->user = $user;
    }

    public function getListComment($userId){
        if(!$user= $this->user->find($userId)) return redirect()->back();

        $comments = $user->comments()->get();
        dd($comments);

        return view('comment.getListComment', compact('user','comments'));
    }

    public function createPage($userId){
        if(!$user= $this->user->find($userId)) return redirect()->back();
        return view('comment.createComment',compact('user'));
    }


}
