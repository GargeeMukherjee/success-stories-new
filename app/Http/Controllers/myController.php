<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\story;


class myController extends Controller
{
    public function story(){
    	//$stories=story::all();

        $stories = story::orderBy('created_at', 'desc')->take(10)->get();
                        

    	return view('successStoriesView',compact('stories'));
    }

    public function add(){
    	return view('addView');

    }
    public function store(Request $request){
    	//return $request->all();
    	$dataInput=$request->all();
    	story::create($dataInput);
    	return redirect('/home');
//return "success";
    
    }
}
