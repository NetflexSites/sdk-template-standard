<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API connections
    |--------------------------------------------------------------------------
    |
    | Your application's API connections for communicating with the
    | Netflex Content API.
    |
    */

    'connections' => [
        'default' => [
            'publicKey' => env('NETFLEX_PUBLIC_KEY'),
            'privateKey' => env('NETFLEX_PRIVATE_KEY'),
        ],
    ],

];
