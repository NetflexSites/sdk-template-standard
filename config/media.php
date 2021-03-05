<?php

use Netflex\Pages\Components\Picture;

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
        'xss' => 320,
        'xs' => 480,
        'sm' => 768,
        'md' => 992,
        'lg' => 1200,
        'xl' => 1440,
        'xxl' => 1920,
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
        'default' => MEDIA_PRESET_ORIGINAL,
        'logoImage' => [
            'size' => '150x50',
            'mode' => Picture::MODE_PORTRAIT
        ],
        'bannerFullscreen' => [
            'mode' => Picture::MODE_FIT,
            'resolutions' => ['1x', '2x'],
            'size' => '1600x1200',
          ],
    ],
];
