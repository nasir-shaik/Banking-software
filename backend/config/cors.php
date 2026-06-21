<?php

return [

    'paths' => ['api/*', 'loan-application'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'http://localhost:5173',
         'https://banking-software-ruddy.vercel.app',
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];