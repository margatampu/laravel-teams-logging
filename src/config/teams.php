<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Display Avatars
    |--------------------------------------------------------------------------
    |
    | Display avatars in teams notification. When dissalowed, avatars value will
    | not used. Allowed value: true (default) and false
    |
    */
    'show_avatars' => true,

    /*
    |--------------------------------------------------------------------------
    | Display Error Type
    |--------------------------------------------------------------------------
    |
    | Display error type in teams notification. Allowed value: true (default) and false
    |
    */
    'show_type' => true,

    /*
    |--------------------------------------------------------------------------
    | Display Route 
    |--------------------------------------------------------------------------
    |
    | Display route (if available) called which led to the logged notification. Allowed value: false (default) and true
    |
    */
    'show_route' => false,


    /*
    |--------------------------------------------------------------------------
    | Display Action (Controller@Method) 
    |--------------------------------------------------------------------------
    |
    | Display controller and method (if available) that led to the logged notification. Allowed value: false (default) and true
    |
    */
    'show_action' => false,

    /*
    |--------------------------------------------------------------------------
    | Display Error Type
    |--------------------------------------------------------------------------
    |
    | Display error type in teams notification. Allowed value: true (default) and false
    |
    */
    'show_type' => true,

    /*
    |--------------------------------------------------------------------------
    | Avatars
    |--------------------------------------------------------------------------
    |
    | Avatars icon to display for each log type
    |
    */
    'avatars' => [
        'emergency' => 'https://api.adorable.io/avatars/face/eyes7/nose7/mouth7/721C24',
        'alert'     => 'https://api.adorable.io/avatars/face/eyes7/nose7/mouth6/AF2432',
        'critical'  => 'https://api.adorable.io/avatars/face/eyes7/nose7/mouth5/FF0000',
        'error'     => 'https://api.adorable.io/avatars/face/eyes7/nose7/mouth9/FF8000',
        'warning'   => 'https://api.adorable.io/avatars/face/eyes6/nose7/mouth10/FFEEBA',
        'notice'    => 'https://api.adorable.io/avatars/face/eyes6/nose7/mouth3/B8DAFF',
        'info'      => 'https://api.adorable.io/avatars/face/eyes5/nose7/mouth1/BEE5EB',
        'debug'     => 'https://api.adorable.io/avatars/face/eyes5/nose7/mouth1/C3E6CB',
    ],

    /*
    |--------------------------------------------------------------------------
    | Colours
    |--------------------------------------------------------------------------
    |
    | Colours to display for each log type
    |
    */
    'colours' => [
        'emergency' => '721C24',
        'alert'     => 'AF2432',
        'critical'  => 'FF0000',
        'error'     => 'FF8000',
        'warning'   => 'FFEEBA',
        'notice'    => 'B8DAFF',
        'info'      => 'BEE5EB',
        'debug'     => 'C3E6CB',
    ],
];
