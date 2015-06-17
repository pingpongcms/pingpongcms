<?php namespace Pingpong\Cms\Post\Entities;
   
use Illuminate\Database\Eloquent\Model;
use Pingpong\Cms\Core\Entities\User;
use Pingpong\Support\Traits\Imageable;
use Pingpong\Support\Traits\Publishable;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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

    public static $path = 'images/posts/';

    protected $appends = [
        'author',
        'save_as_draft'
    ]; 

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function setImageAttribute($value)
    {
        if ($value instanceof UploadedFile) {
            $this->attributes['image'] = upload_image(
                $value,
                static::$path,
                'post.uploaded'
            );
        } else {
            $this->attributes['image'] = $value;
        }
    }

    public function getAuthorAttribute()
    {
        return $this->user ? $this->user->name : 'Unknown';
    }

    public function getSaveAsDraftAttribute()
    {
        return $this->drafted() ? true : false;
    }

}