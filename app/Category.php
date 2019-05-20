<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function category(){

    	return $this->belongsTo('App\Recipe');
    }
}
