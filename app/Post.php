<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    	 protected $fillable = [
        'title', 'body', 'user_id', 'subreddit_id'
    ];

	public function user(){
		return $this->hasOne('App\User');
	}

	public function comments(){
		return $this->hasMany('App\Comment');
	}

	public function subreddit(){
		return $this->hasOne('App\Subreddit', 'foreign_key');
	}

}
