/* eslint-disable @typescript-eslint/no-var-requires */
const mix = require('laravel-mix')
const path = require('path')

require('laravel-mix-eslint')
require('laravel-mix-polyfill')

mix.autoload({
  jquery: ['$', 'jQuery']
});

mix
  .js('resources/js/app.js', 'public/js')
  .eslint()
  .sass('resources/sass/app.scss', 'public/css')
  .polyfill({
    useBuiltIns: 'entry',
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
  .disableNotifications()
  .options({
    processCssUrls: false,
    postCss: [
      require('postcss-logical')({ dir: 'ltr' }),
    ],
    autoprefixer: {
      enabled: true,
      options: {
        grid: true,
      },
    },
  })

if (mix.inProduction()) {
  mix
    .version()
} else {
  mix
    .sourceMaps()
}
