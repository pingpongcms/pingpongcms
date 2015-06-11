<?php

namespace Cms\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		user()->create([
			'name' => 'Administrator',
			'email' => 'pingpong.labs@gmail.com',
			'password' => 'secret',
			'confirmed' => 1
		]);
	}

}