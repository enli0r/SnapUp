<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Sex;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{

    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function admin(){
        return view('admin.index');
    }
}
