<?php

namespace App\Http\Controllers;

use App\ForumComment;
use App\ForumPost;
use Illuminate\Http\Request;

class ForumController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
    public function forumIndex()
    {
        $comments=ForumComment::latest()->get();
        $posts = ForumPost::latest()->get();
        return view('forum.index',compact('comments','posts'));
    }

      public function create()
      {
          $comments=ForumComment::latest()->get();
          $posts = ForumPost::latest()->get();
          return view('forum.createPost',compact('comments','posts'));
      }




    public function storePost()
    {
        $data = request()->validate([
            'email'=> 'required',
            'title'=>'required|min:3',
            'category'=>'required',
            'post'=>'required|min:3'
        ]);
        //dd($data);
        ForumPost::create($data);
        return redirect()->route('forum');
    }
    public function storeComment()
    {
        $data = request()->validate([
            'comment'=> 'required|min:3|max:50000',
            'email'=>'required',
        ]);
        ForumComment::create($data);
        return redirect()->route('forum');
    }

}
