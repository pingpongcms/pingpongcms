<?php namespace Pingpong\Cms\Post\Entities;
   
use Illuminate\Database\Eloquent\Model;
use Pingpong\Cms\Core\Entities\User;
use Pingpong\Support\Traits\Imageable;
use Pingpong\Support\Traits\Publishable;

class Post extends Model {

	use Imageable, Publishable;

    protected $fillable = [
    	'user_id',
    	'type',
    	'title',
    	'slug',
    	'body',
    	'image',
    	'published_at'
    ];

    const PUBLISHED_AT = 'published_at';

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}