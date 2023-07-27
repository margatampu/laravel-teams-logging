<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Display Avatars
    |--------------------------------------------------------------------------
    |
    | Display avatars in teams notification. When disallowed, avatars value will
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
    | Avatars
    |--------------------------------------------------------------------------
    |
    | Avatars icon to display for each log type
    |
    */
    'avatars' => [
        'emergency' => 'https://adorable-avatars.broken.services/face/eyes7/nose7/mouth7/721C24',
        'alert'     => 'https://adorable-avatars.broken.services/face/eyes7/nose7/mouth6/AF2432',
        'critical'  => 'https://adorable-avatars.broken.services/face/eyes7/nose7/mouth5/FF0000',
        'error'     => 'https://adorable-avatars.broken.services/face/eyes7/nose7/mouth9/FF8000',
        'warning'   => 'https://adorable-avatars.broken.services/face/eyes6/nose7/mouth10/FFEEBA',
        'notice'    => 'https://adorable-avatars.broken.services/face/eyes6/nose7/mouth3/B8DAFF',
        'info'      => 'https://adorable-avatars.broken.services/face/eyes5/nose7/mouth1/BEE5EB',
        'debug'     => 'https://adorable-avatars.broken.services/face/eyes5/nose7/mouth1/C3E6CB',
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
