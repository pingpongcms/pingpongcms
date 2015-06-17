<?php namespace Pingpong\Cms\Post\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
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

		$no = $posts->firstItem();

		return view('post::admin.index', compact('posts', 'no'));
	}

	public function create()
	{
		return view('post::admin.create');
	}

	public function store(Request $request)
	{
		$data = $request->all();
		$data['user_id'] = $request->user()->id;

		if ($request->has('save_as_draft')) {
			$data['published_at'] = null;
		} else {
			$data['published_at'] = Carbon::now();
		}

		$post = $this->repository->create($data);

		return cms()->redirect('posts');
	}

	public function edit($id)
	{
		$post = $this->repository->find($id);

		return view('post::admin.edit', compact('post', 'id'));
	}
	
}