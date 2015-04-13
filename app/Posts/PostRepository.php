<?php

namespace App\Posts;

use App\Post;
use Illuminate\Support\Facades\DB;

class PostRepository
{
    public function all()
    {
        return Post::with('user')->all();
    }

    public function paginate($perPage = 10)
    {
        return Post::with('user')->published()->paginate($perPage);
    }

    public function getPosts($perPage = 10)
    {
        return Post::with('user')->type('post')->paginate($perPage);
    }

    public function getPages($perPage = 10)
    {
        return Post::with('user')->type('post')->paginate($perPage);
    }

    public function getLatestPaginated($type = null, $perPage = 10)
    {
        switch ($type) {
            case 'published':
                return Post::with('user')->published()->paginate($perPage);
                break;

            case null:
                return $this->getPosts($perPage);
                break;
            
            default:
                return Post::with('user')->type($type)->latest()->paginate($perPage);
                break;
        }
    }

    public function getArchiveList()
    {
        return Post::with('user')->published()
            ->select('posts.*', DB::raw('DATE(published_at) as published_date'))
            ->groupBy('published_date')
            ->orderBy('published_at', 'asc')
            ->get();
    }

    public function getArchive($year, $month, $perPage = 10)
    {
        return Post::with('user')->published()
            ->whereRaw("YEAR(published_at) = '$year' and MONTH(published_at) = '$month'")
            ->paginate($perPage);
    }

    public function find($id)
    {
        return Post::with('user')->whereSlug($id)->orWhere('id', $id)->firstOrFail();
    }
    
}
