<?php

namespace App\Posts;

use App\Post;
use Illuminate\Support\Facades\DB;

class PostRepository
{
    public function all()
    {
        return Post::all();
    }

    public function paginate($perPage = 10)
    {
        return Post::published()->paginate($perPage);
    }

    public function getPosts($perPage = 10)
    {
        return Post::type('post')->paginate($perPage);
    }

    public function getPages($perPage = 10)
    {
        return Post::type('post')->paginate($perPage);
    }

    public function getLatestPaginated($type = null, $perPage = 10)
    {
        switch ($type) {
            case 'published':
                return Post::published()->paginate($perPage);
                break;

            case null:
                return $this->getPosts($perPage);
                break;
            
            default:
                return Post::type($type)->latest()->paginate($perPage);
                break;
        }
    }

    public function getArchiveList()
    {
        return Post::published()
            ->select('posts.*', DB::raw('DATE(published_at) as published_date'))
            ->groupBy('published_date')
            ->orderBy('published_at', 'asc')
            ->get();
    }
}
