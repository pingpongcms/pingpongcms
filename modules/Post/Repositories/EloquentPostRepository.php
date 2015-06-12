<?php

namespace Pingpong\Cms\Post\Repositories;

use Pingpong\Cms\Post\Entities\Post;
use Pingpong\Cms\Post\Repositories\PostRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class EloquentPostRepository extends BaseRepository implements PostRepository
{
	public function model()
	{
		return Post::class;
	}
}