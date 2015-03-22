<?php

use Illuminate\Support\Str;

$factory('App\User', [
    'name' => $faker->name,
    'username' => $faker->username,
    'email' => $faker->email,
    'password' => 'secret'
]);

$factory('App\Category', [
    'name' => $faker->word,
    'description' => $faker->paragraph
]);

$factory('App\Tag', [
    'name' => $faker->word,
    'description' => $faker->paragraph
]);

$factory('App\Post', [
	'user_id' => 'factory:App\User',
    'title' => $faker->title,
    'slug' => $faker->slug,
    'body' => $faker->paragraphs
]);