<?php

namespace App\Menus\Presenters;

abstract class AbstractPresenter implements PresenterInterface {

	protected $menu;

	public function __construct($menu)
	{
		$this->menu = $menu;
	}

	public function getItemTag($item)
	{
		if ($item->hasChild()) {
			return $this->getItemWithChild($item);
		}

		return $this->getItemNoChild($item);
	}

	public function render()
	{
		$result = $this->getOpenTag();

		foreach ($this->menu->items as $item) {
			$result .= $this->getItemTag($item);
		}

		return $result.= $this->getCloseTag();
	}

}