<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class TagTableSeeder extends Seeder {

    public function run()
    {
        TestDummy::times(10)->create('App\Tag');
    }

}