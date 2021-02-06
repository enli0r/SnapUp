<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        //Showing off the form
        return view('auth.login');
    }

    public function store(Request $request){

        //Validation
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required'
        ]);


        //Sign in
        if(!Auth::attempt($request->only('password', 'email'), $request->remember)){//Checks if the user gave correct information
            return back()->with('status', 'Invalid login details!'); //Retruns back with session so we can display error message
        }

        //Redirect
        return redirect()->route('home');
    }
}
