const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix
  .setPublicPath('./public')
  .browserSync({
    proxy: 'https://cottontail.test',
    open: 'external',
    https: {
      key: "/Users/aidanweltner1/.config/valet/Certificates/cottontail.test.key",
      cert: "/Users/aidanweltner1/.config/valet/Certificates/cottontail.test.crt",
    }
  });

mix
  .sass('resources/styles/app.scss', 'styles')
  .sass('resources/styles/blocks.scss', 'styles')
  .sass('resources/styles/editor.scss', 'styles')
  .options({
    processCssUrls: false,
    postCss: [require('tailwindcss')],
  });

mix
  .js('resources/scripts/app.js', 'scripts')
  .js('resources/scripts/customizer.js', 'scripts')
  .blocks('resources/scripts/editor.js', 'scripts')
  .autoload({ jquery: ['$', 'window.jQuery'] })
  .extract();

mix
  .copyDirectory('resources/images', 'public/images')
  .copyDirectory('resources/svg', 'public/svg')
  .copyDirectory('resources/fonts', 'public/fonts');

mix
  .sourceMaps()
  .version();
