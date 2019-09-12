<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */
   
    'supportsCredentials' => false,
    'allowedOrigins' => ['localhost,127.0.0.1,booking.duyanhplus.com'],
    'allowedOriginsPatterns' => ['*'],
    'allowedHeaders' => ['X-Requested-With, Content-Type, X-Token-Auth, Authorization'],
    'allowedMethods' => ['GET, POST, PUT, DELETE, OPTIONS'],
    'exposedHeaders' => ['*'],
    'maxAge' => 0,

];
