<?php namespace Pingpong\Cms\Settings\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Pingpong\Cms\Settings\Entities\Setting;

class SettingsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$settings = [
			'site.name' => 'Pingpong CMS',
			'site.description' => 'Pingpong CMS - A modern CMS based on Laravel PHP Framework',
			'site.keywords' => 'pingpong, cms, pingpong labs, laravel',
			'site.author' => 'Pingpong Labs, Gravitano',
		];

		foreach ($settings as $key => $value) {
			Setting::create(compact('key', 'value'));
		}
	}

}