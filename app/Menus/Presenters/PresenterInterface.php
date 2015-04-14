<?php

namespace App\Menus\Presenters;

interface PresenterInterface {

	public function getOpenTag();
	
	public function getCloseTag();

	public function getItemNoChild($item);
	
	public function getItemWithChild($item);

}