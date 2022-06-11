<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $title = "this is title";
        return view('test')->with('title', $title);
    }
}
