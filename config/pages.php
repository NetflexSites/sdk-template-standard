<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pages
    |--------------------------------------------------------------------------
    |
    | Configuration for Netflex Pages
    |
    */
    
    'controller' => Netflex\Pages\Controllers\PageController::class,

    'prefix' => '',

    'components' => [
        Netflex\Pages\Components\BackgroundImage::class,
        Netflex\Pages\Components\Blocks::class,
        Netflex\Pages\Components\EditorButton::class,
        Netflex\Pages\Components\EditorTools::class,
        Netflex\Pages\Components\Image::class,
        Netflex\Pages\Components\Inline::class,
        Netflex\Pages\Components\Nav::class,
        Netflex\Pages\Components\Picture::class,
        Netflex\Pages\Components\Seo::class,
        Netflex\Pages\Components\StaticContent::class,
    ],

];
