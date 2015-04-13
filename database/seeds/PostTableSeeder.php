<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class PostTableSeeder extends Seeder {

    public function run()
    {
        TestDummy::times(10)->create('App\Post', [
        	'type' => 'post',
        	'published_at' => Carbon::now()
        ]);

        TestDummy::times(10)->create('App\Post', [
        	'type' => 'page',
        	'published_at' => Carbon::now()
        ]);
    }

}