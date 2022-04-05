<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }


    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){

        //Validation
        $this->validate($request, [ //Throws exception if false
            'name'=>'required|max:255',
            'username'=>'required|max:255',
            'email'=>'required|email|max:255', //Mora da se doda email zbog verifikacije
            'password'=>'required|confirmed' //Confirmed zbog password_confirmation imena za repeat password u register.blade.php
        ]);

        //Adding to database
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        //Sign in
        Auth::attempt($request->only('password', 'email')); //This is how the user is signed

        //Redirect
        return redirect()->route('home');
    }
}
