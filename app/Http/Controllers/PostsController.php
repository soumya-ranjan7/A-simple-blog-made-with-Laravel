<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }



    public function index()
    {

        $posts = Post::latest()->filter(request(['month','year']))->get();

        $archives = Post::archives();



        return view('posts.index',compact(['posts','archives']));
    }

    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        //$post=new Post;

        //$post->title = request('title');
        //$post->body = request('body');

        //$post->save();

        $this->validate(request(),[
            'title'=>'required',
            'body' => 'required'

        ]);

        //Post::create(request([
            //'title' => request('title'),
            //'body' => request('body'),
            //'user_id' => auth()->user()->id
        //]));

        auth()->user()->publish(
            new Post(request(['title','body']))
        );

        flash('Your post has been successfully pubblished.')->success();

        return redirect()->home();

    }
}
