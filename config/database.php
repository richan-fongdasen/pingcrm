<?php

return [

    'connections' => [
        'turso' => [
            'driver' => 'turso',
            'db_url' => env('DB_URL', 'http://localhost:8080'),
            'access_token' => env('DB_ACCESS_TOKEN'),
            'db_replica' => env('DB_REPLICA'),
            'prefix' => env('DB_PREFIX', ''),
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'sticky' => env('DB_STICKY', true),
        ],
    ],

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => false, // disable to preserve original behavior for existing applications
    ],

];
