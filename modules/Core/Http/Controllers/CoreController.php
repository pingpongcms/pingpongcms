<?php namespace Cms\Core\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class CoreController extends Controller {
	
	public function index()
	{
		return view('core::index');
	}
	
	/**
	* Show the Index Page.
	* 
	* @Get("/admin/settings")
	*/
	public function settings()
	{
		return view('core::settings');
	}

}