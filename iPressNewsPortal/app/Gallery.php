<?php

namespace App;

use App\News;


use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function news (){
    	return $this->hasMany(News::class);
}
