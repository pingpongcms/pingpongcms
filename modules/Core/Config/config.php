<?php

return [
    'prefix' => 'administrator',
    
    'title' => '<b>Pingpong</b> CMS',
    
    'middleware' => [
        'auth',
        'cms.auth'
    ]
];
