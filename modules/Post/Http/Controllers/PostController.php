<?php namespace Pingpong\Cms\Post\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class PostController extends Controller
{
    
    public function index()
    {
        return view('post::index');
    }
}
