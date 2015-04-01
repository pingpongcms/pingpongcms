<?php namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $fillable = [
		'user_id',
		'title',
		'slug',
		'body',
		'image',
		'published_at'
	];

	protected $dates = [
		'published_at'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
	
}
