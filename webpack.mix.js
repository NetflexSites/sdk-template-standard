const mix = require('laravel-mix');

require('laravel-mix-eslint')
require('laravel-mix-polyfill')
require('laravel-mix-purgecss')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js('resources/js/app.js', 'public/js')
  .eslint()
  .sass('resources/sass/app.scss', 'public/css')
  .polyfill({
    enabled: true,
    useBuiltIns: 'usage',
    targets: false,
  })
  .webpackConfig({
    devServer: {
      serveIndex: true,
      before (app, server) {
        server._watch([
          'app/**/*.php',
          'resources/views/**/*.php',
        ])
      },
    },
  })
  .extract()
  .options({
    processCssUrls: false,
    postCss: [
      require('postcss-logical')({ dir: 'ltr' }),
      require('tailwindcss')(),
    ],
  })

if (mix.inProduction()) {
  mix
    .purgeCss()
    .version()
}
