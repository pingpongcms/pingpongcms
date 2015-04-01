<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\Admin\Posts\CreatePostRequest;
use App\Http\Requests\Admin\Posts\UpdatePostRequest;

class PostsController extends Controller {

	public function __construct()
	{
		//
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::latest()->paginate(20);

		$no = $posts->firstItem();

		return view('admin.posts.index', compact('posts', 'no'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreatePostRequest $request)
	{
		$post = $request->user()->posts()->create($request->all());

		return redirect()->route('admin.posts.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);

		return view('admin.posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
	
		return view('admin.posts.edit', compact('post'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdatePostRequest $request, $id)
	{		
		$post = Post::findOrFail($id);

		$post->update($request->all());

		return redirect()->route('admin.posts.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		
		$post->delete();
	
		return redirect()->route('admin.posts.index');
	}

}
