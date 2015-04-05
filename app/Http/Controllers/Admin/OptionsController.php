<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Option;
use App\Http\Requests\Admin\Options\CreateOptionRequest;
use App\Http\Requests\Admin\Options\UpdateOptionRequest;

class OptionsController extends Controller {

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
		$options = Option::latest()->paginate(20);

		$no = $options->firstItem();

		return view('admin.options.index', compact('options', 'no'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.options.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateOptionRequest $request)
	{
		$option = Option::create($request->all());

		return redirect()->route('admin.options.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$option = Option::findOrFail($id);

		return view('admin.options.show', compact('option'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$option = Option::findOrFail($id);
	
		return view('admin.options.edit', compact('option'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateOptionRequest $request, $id)
	{		
		$option = Option::findOrFail($id);

		$option->update($request->all());

		return redirect()->route('admin.options.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$option = Option::findOrFail($id);
		
		$option->delete();
	
		return redirect()->route('admin.options.index');
	}

}
