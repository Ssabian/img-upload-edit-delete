<?php

namespace App\Http\Controllers;
//
//use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;
use App\Gallery;

class FileController extends Controller
{	

	 public function index(){
	 	$gallery= Gallery::all();
         return view('welcome',compact('gallery'));
    }
    public function store(Request $request)
    {
    	$gallery = new Gallery;
    	$gallery->path_large=$request->file;
    	$gallery->save();
    	

    	
    	$file = $request->file;
    	$file->move('uploads', $file->getClientOriginalName());
    	echo '<img src="uploads/' . $file->getClientOriginalName() . '" />';
    	return back();
  	
  }
  public function delete(Gallery $gallery)
  {
  	$gallery->delete();
  	return back();
  }
}
