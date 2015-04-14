<?php 

use App\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$menu = Menu::create(['name' => 'top']);

		$menu->add([
			'url' => '/',
			'title' => 'Home',
			'order' => 0,
			'active' => 1
		]);

		$menu->add([
			'url' => '/posts',
			'title' => 'Posts',
			'order' => 1,
			'active' => 1
		]);

	}

}