<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Composition extends Model
{
    public function compisition(){
    	return $this->belongsToMany('App\Recipe');
    }
}
