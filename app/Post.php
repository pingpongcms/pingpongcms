<?php namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'user_id',
        'type',
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

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function scopeType($query, $type)
    {
        return $query->whereType($type);
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at');
    }
}
