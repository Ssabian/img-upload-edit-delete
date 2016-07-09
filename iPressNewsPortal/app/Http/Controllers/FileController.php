<?php

namespace App\Http\Controllers;
//
//use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;

class FileController extends Controller
{	

	 public function index(){
         return view('welcome');
    }
    public function store(Request $request)
    {
    	$news = new News;
    	$news->main_img=$request->file;
    	$news->save();
    	

    	
    	$file = $request->file;
    	$file->move('uploads', $file->getClientOriginalName());
    	echo '<img src="uploads/' . $file->getClientOriginalName() . '" />';
    	return back();
  	
  }
}
