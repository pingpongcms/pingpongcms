<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run()
    {
    	User::create([
    		'name' => 'Administrator',
    		'email' => 'pingpong.labs@gmail.com',
    		'username' => 'admin',
    		'password' => 'secret',
    	]);
    }

}