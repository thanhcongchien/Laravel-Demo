<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function getIndex(){

        
    //     $slide = Slide::all();
        
       


    //     return view('pages.product_type',compact('slide'));

    //     }
    public function getProductType(){
       
        $slide = Slide::all();
        
    //    $new_product = Product::where('i')->get();
            $new_product = Product::get();


        return view('pages.product_type',compact('slide','new_product'));
    }
      public function getProductDetail(){
        return view ('pages.product_detail');
    }


        
}
