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

    protected $appends = [
        'url',
        'archive_url',
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

    public function getUrlAttribute()
    {
        return route('posts.show', $this->slug);
    }

    public function getArchiveUrlAttribute()
    {
        return route('posts.archive', [
            strtolower($this->published_at->format('Y')),
            strtolower($this->published_at->format('m'))
        ]);
    }

}
