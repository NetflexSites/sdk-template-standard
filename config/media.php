<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Breakpoints
    |--------------------------------------------------------------------------
    |
    | Your application's defined breakpoints sizes (max-width)
    |
    */
    'breakpoints' => [
        'xxs' => 320,
        'xs' => 575,
        'sm' => 767,
        'md' => 991,
        'lg' => 1199,
        'xl' => 1399,
        'xxl' => 1919,
    ],

    /*
    |--------------------------------------------------------------------------
    | Presets
    |--------------------------------------------------------------------------
    |
    | Defined media presets for responsive pictures and background-images
    | Supported parameters:
    |   - mode
    |   - resolutions
    |   - fill
    |   - size
    |   - breakpoints
    |     - mode
    |     - resolutions
    |     - fill
    */
    'presets' => [
        'default' => MEDIA_PRESET_ORIGINAL
    ],
];
