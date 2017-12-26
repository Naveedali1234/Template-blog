<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class registerController extends Controller
{
    public function create(){
    	return view('sessions.create');
    }
    public function store(Request $request){
    	//validate the inputs
    	$this->validate($request,[
    		'name' => 'required',
    		'email'=> 'required',
    		'password'=> 'required'
    		]);

    	//create and save the user
    	$user = new User;
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->password = $request->input('password');

    	$user->save();

    	//sign then in
    	auth()->login($user);

    	return redirect()->home();

    }
}
