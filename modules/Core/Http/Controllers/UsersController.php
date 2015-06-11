<?php namespace Pingpong\Cms\Core\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return view('core::users.index');
    }   
}
