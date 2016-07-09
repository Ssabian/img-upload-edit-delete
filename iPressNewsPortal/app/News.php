<?php

namespace App;
use App\Gallery;

use App\Slider;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function slider(){
    	return $this->belongsTo(Slider::Class);
    }

    public function gallery(){
    	return $this->belongsTo(Gallery::Class);
    }
    
}
