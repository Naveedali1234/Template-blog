<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    public function __construct(){
        //$this->middleware('auth')->login();
    }
	public function index(){

		$posts = Post::latest()->filter(request(['month','year']))->get();

		return view('posts.welcome',compact('posts','archives'));
	}
    public function create(){
    	return view('posts.create');
    }
    public function show($id){
    	$post = Post::find($id);
    	return view('posts.show',compact('post'));
    }
    public function store(Request $request){
    	

    	$this->validate($request,[
    		'title' => 'required' ,
    		'body' => 'required'
    		]);
        //one method
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->id();
        $post->save();
    	//2nd method
    	//Post::create($request->all());
    	

    	return back();
    }
}
