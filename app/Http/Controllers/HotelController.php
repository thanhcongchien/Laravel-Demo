<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\Hotel;
use Illuminate\Http\Request;
class HotelController extends Controller
{
     public function getHotel(){
       
        $slide = Slide::all();
        
       $hotels = Hotel::where('new',1)->get();


        return view('pages.hotel',compact('slide','hotels'));
    }
}

