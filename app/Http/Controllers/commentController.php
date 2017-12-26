<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\comments;
use Session;
class commentController extends Controller
{
    public function store(Request $request,$id){
   //  	//$post->addComment(request('body'));
   //  	comments::create([
			// 'body'=> $request->input('body'),
			// 'post_id'=> $id
			// ]);

   //  	return back();

    	$post = Post::find($id);
    	$comment = new comments;
    	$comment->body = $request->input('body');

    	if($post->comments()->save($comment)) {
    		Session::flash('message_success','Comment successfully posted.');
    	}
    	else {
    		Session::flash('message_danger','Comment posting failed.');
    	
    	}
    	
    	return redirect("/post/$id");
    }
}
