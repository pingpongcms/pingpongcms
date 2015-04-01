<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Tag;
use App\Http\Requests\Admin\Tags\CreateTagRequest;
use App\Http\Requests\Admin\Tags\UpdateTagRequest;

class TagsController extends Controller {

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
		$tags = Tag::latest()->paginate(20);

		$no = $tags->firstItem();

		return view('admin.tags.index', compact('tags', 'no'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.tags.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateTagRequest $request)
	{
		$tag = Tag::create($request->all());

		return redirect()->route('admin.tags.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tag = Tag::findOrFail($id);

		return view('admin.tags.show', compact('tag'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tag = Tag::findOrFail($id);
	
		return view('admin.tags.edit', compact('tag'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateTagRequest $request, $id)
	{		
		$tag = Tag::findOrFail($id);

		$tag->update($request->all());

		return redirect()->route('admin.tags.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tag = Tag::findOrFail($id);
		
		$tag->delete();
	
		return redirect()->route('admin.tags.index');
	}

}
