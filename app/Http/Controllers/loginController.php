<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Contracts\Auth\Guard;

class loginController extends Controller
{
    //
     public function show()
    {
        //
        return view('login');
    }

    public function proccessLogin(Request $request, Guard $auth)
    {
    //dd($request->all());
    //dd($auth);
       $credential = $request->only("email","password");

        if($auth->attempt($credential)) {

            return redirect()->intended('users/'.$auth->user()->id);

        } else {

            return redirect('login')->with("message","<h1>Try Again</h1>");

        }
    }

    public function logout(Guard $auth) {

    	$auth->logout();
    	
    	return redirect("login");
    }
}
