<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subreddit extends Model
{



	 protected $fillable = [
        'name', 'description', 'user_id',
    ];



    public function posts(){

    	return $this->hasMany('App\Post');
    }
}
