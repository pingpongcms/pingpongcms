<?php namespace Pingpong\Cms\Post\Http\Controllers\Admin;

use Pingpong\Cms\Post\Repositories\PostRepository;
use Pingpong\Modules\Routing\Controller;

class PostsController extends Controller {
	
	protected $repository;

	public function __construct(PostRepository $repository)
	{
		$this->repository = $repository;
	}

	public function index()
	{
		$posts = $this->repository->paginate(config('post.perpage', 12));

		return view('post::admin.index', compact('posts'));
	}

	public function create()
	{
		return view('post::admin.create');
	}
	
}