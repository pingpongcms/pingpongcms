<?php

namespace App\Posts;

use App\Post;

class PostRepository {

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
		if ($type) 
		{
			return Post::type($type)->latest()->paginate($perPage);
		}

		return $this->getPosts($perPage);
	}

}