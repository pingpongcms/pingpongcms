<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Posts\PostRepository;
use Illuminate\Http\Request;

class PostsController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

	public function index()
	{
        $posts = $this->postRepository->paginate();

        return theme('index', compact('posts'));
	}

	public function show($id)
	{
		$post = $this->postRepository->find($id);

		return theme('posts.show', compact('post'));
	}

    public function archive($year, $month)
    {
        $posts = $this->postRepository->getArchive($year, $month);

        return theme('index', compact('posts'));
    }

}
