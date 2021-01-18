<?php

use Netflex\Pages\Components\Picture;
use Netflex\Pages\MediaPreset as Preset;

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
        'default' => Preset::ORIGINAL
    ],
];