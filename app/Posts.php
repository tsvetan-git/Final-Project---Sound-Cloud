<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Posts extends Model {

	//posts table in database
	protected $guarded = [];
	public function comments()
	{
		return $this->hasMany('App\Comments','on_post');
	}
	
	public function author()
	{
		return $this->belongsTo('App\User','author_id');
	}
	
	public function likes()
	{
		return $this->morphToMany('App\User', 'likeable')->whereDeletedAt(null);
	}
	
	public function getIsLikedAttribute()
	{
		$like = $this->likes()->whereUserId(Auth::id())->first();
		return (!is_null($like)) ? true : false;
	}
}
