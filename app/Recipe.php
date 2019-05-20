<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function liked()
    {
      return $this->belongsToMany('App\User', 'likes');
    }

    public function composition(){
    	return $this->hasMany('App\Composition');
    }

    public function picture(){
    	return $this->hasMany('App\Picture');
    }

  	public function category(){
  		return $this->hasOne('App\Category');
  	}
}
