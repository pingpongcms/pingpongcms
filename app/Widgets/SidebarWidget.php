<?php

namespace App\Widgets;

use App\Posts\PostRepository;

class SidebarWidget {

	protected $postRepository;

	public function __construct(PostRepository $postRepository)
	{
		$this->postRepository = $postRepository;
	}

	public function subscribe($widget)
	{
		$widget->register('archive', __CLASS__ .'@archive');
		$widget->register('social_link', __CLASS__.'@socialLink');
		$widget->group('sidebar', config('widget.sidebar'));
	}

	public function archive()
	{
		$posts = $this->postRepository->getArchiveList();

		return view('widgets.post-archive', compact('posts'))->render();
	}

	public function socialLink()
	{
		return view('widgets.social-links')->render();
	}

}