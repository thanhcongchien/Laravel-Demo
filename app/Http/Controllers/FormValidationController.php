<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidationController extends Controller
{
     public function index(){
        return View('pages.form-validation');
    }
    /**
     * Store
     */
    public function store(FormPost $request){
        $validated = $request->validated();
        $validated['slug']=str_slug($request->title);
       // dd($validated);
        Post::create($validated);
        return redirect('/form-validation')->with('success', 'Add Success!');
 
    }

}
