<?php

Route::middleware('cms.guest', 'Pingpong\Cms\Core\Http\Middleware\Guest');
Route::middleware('cms.auth', 'Pingpong\Cms\Core\Http\Middleware\Auth');
