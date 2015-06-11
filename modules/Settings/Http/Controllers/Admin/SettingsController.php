<?php namespace Pingpong\Cms\Settings\Http\Controllers\Admin;

use Pingpong\Modules\Routing\Controller;

class SettingsController extends Controller {
	
	public function index()
	{
		return view('settings::admin.index');
	}
	
}