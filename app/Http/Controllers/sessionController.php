<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function create(){
    	
    }
    public function destroy(){
    	auth()->logout();

    	return redirect()->home();
    }
}
