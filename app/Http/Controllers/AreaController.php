<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function Area(Request $re){
        $a = $re->input('a');
        $h = $re->input('h');
        return view('areaofshape')->with(['areaTriangle'=>($a*$h)/2]);
    }
}
