<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'size' => 'required',
            'color' => 'required'
        ]);


        

    }
}
