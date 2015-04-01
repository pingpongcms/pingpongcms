<?php

namespace App\Posts;

use App\Post;

class PostRepository
{

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
}
