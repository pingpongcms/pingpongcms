<?php 

use App\Option;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$options = [
			'site.name' => 'Pingpong CMS',
			'site.description' => 'A modern CMS based on Laravel PHP Framework',
			'site.slogan' => 'A modern CMS based on Laravel PHP Framework',
			'site.keywords' => 'pingpongcms, pingpong cms, pingpong labs, gravitano',
			'site.author' => 'Pingpong Labs',
		];

		foreach ($options as $key => $value)
		{
			Option::create(compact('key', 'value'));
		}
	}

}