<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function store(){

        //Logout
        Auth::logout();

        //Redirect
        return redirect()->route('home');
    }
}
