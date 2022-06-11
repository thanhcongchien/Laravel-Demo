<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function cong($a, $b){
        return $a + $b;
    }
    public function tinhtong(Request $request){
        $sum = $request->a + $request->b;
        return view('sum', compact('sum'));
    }
}
