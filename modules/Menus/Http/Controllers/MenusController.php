<?php namespace Pingpong\Cms\Menus\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class MenusController extends Controller
{
    
    public function index()
    {
        return view('menus::index');
    }
}
