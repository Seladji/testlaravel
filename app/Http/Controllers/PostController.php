<?php

namespace App\Http\Controllers;

use App\Article;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('article',compact('posts'));
    }
    public function show($id)
    {
       // $post =Post::findOrFail($id);
        $post=Post::where('title','neque')->first();

        return view('article1',[
            'post'=>$post
        ]);
    }
    public function create()
    {
        return view('form');
    }
    public function store(Request $request)
    {
       
        $post =new Post(); 
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        $comment =new Comment();
        $comment->content = $request->input('comment');
        $comment->post_id = $post->id;

        $comment->save();
       
        

        return view('contact');
    }
    public function contact()
    {
        return view('contact');
    }
  
}
