<?php

namespace App\Menus\Presenters;

class DefaultPresenter extends AbstractPresenter {

	public function getOpenTag()
	{
		return '<div class="blog-masthead"><div class="container"><nav class="blog-nav">';
	}

	public function getCloseTag()
	{
		return '</nav></div></div>';
	}

	public function getItemNoChild($item)
	{
		return link_to($item->url, $item->title, $this->getAttributes($item), $item->secure);
	}

	public function getItemWithChild($item)
	{
		return link_to($item->url, $item->title, $this->getAttributes($item), $item->secure);
	}

	protected function getAttributes($item)
	{
		$attributes = is_array($item->attributes) ? $item->attributes : [];
		
		return array_merge($attributes, [
			'class' => 'blog-nav-item'
		]);
	}

}