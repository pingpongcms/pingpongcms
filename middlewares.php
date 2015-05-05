<?php

Route::middleware('cms.guest', 'Cms\Core\Http\Middleware\Guest');
Route::middleware('cms.auth', 'Cms\Core\Http\Middleware\Auth');