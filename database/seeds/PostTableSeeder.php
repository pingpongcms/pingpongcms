<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class PostTableSeeder extends Seeder {

    public function run()
    {
        TestDummy::times(30)->create('App\Post');
    }

}