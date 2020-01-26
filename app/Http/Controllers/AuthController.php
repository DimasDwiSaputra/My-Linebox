<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Auth;
use AuthenticatesUsers;

class AuthController extends Controller
{
    public function login()
    {
    	return view('projectku/login');
    }

      public function postkarlog(Request $request)
    {
        if(!\Auth::attempt(['username' => $request->username, 'password' => $request->password ])){
            return redirect()->back();
        }

         return redirect('/projectku/index');
    }

    public function getRegister()
    {
    	return view('projectku/registerku');
    }

     public function postRegister(Request $request)
    {
    	User:: create ([
    			'username'=> $request->username,
    			'email'=> $request->email,
    			'password'=> bcrypt ($request ->password)
    	]);
    	return redirect()->back();
    }
    //log out
    public function karlogout() {

        Auth::logout();
        return redirect('/projectku/login');
    }
}

