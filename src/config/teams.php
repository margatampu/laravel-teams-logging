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
    | Avatars
    |--------------------------------------------------------------------------
    |
    | Avatars icon to display for each log type
    |
    */
    'avatars' => [
         'emergency' => 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/721C24.png',
         'alert'     => 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/AF2432.png',
         'critical'  => 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/FF0000.png',
         'error'     => 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/FF8000.png',
         'warning'   => 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/FFEEBA.png',
         'notice'    => 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/B8DAFF.png',
         'info'      => 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/BEE5EB.png',
         'debug'     => 'https://raw.githubusercontent.com/edsonjorgef1/laravel-teams-logging/dev/assets/avatar/C3E6CB.png',
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
