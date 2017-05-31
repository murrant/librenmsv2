const {mix} = require('laravel-mix');

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

mix.browserSync('librenmsv2.local');

mix.webpackConfig({
    resolve: {
        modules: [
            'node_modules'
        ],
        alias: {
            'jquery-ui': 'jquery-ui/ui'
        }
    }
});

// auto load jquery if we ever don't require it on every page...
// mix.autoload({
//     jquery: ['$', 'window.jQuery']
// });

// compile sass resources from app.scss
mix.sass('resources/assets/sass/app.scss', 'public/css');

// compile js resources from app.js (which imports bootstrap.js)
mix.js('resources/assets/js/app.js', 'public/js')
    .extract([ // improve caching and reduce recompilation
        'vue',
        'axios',
        'jquery',
        'jquery-ui/ui/core',
        'jquery-ui/ui/jquery-1-7',
        'jquery-ui/ui/keycode',
        'jquery-ui/ui/labels',
        'jquery-ui/ui/tabbable',
        'jquery-ui/ui/unique-id',
        'jquery-ui/ui/widget',
        'jquery-ui/ui/widgets/mouse',
        'jquery-ui/ui/widgets/draggable',
        'jquery-ui/ui/widgets/droppable',
        'jquery-ui/ui/widgets/resizable',
        'gridstack/src/gridstack.jQueryUI.js',
        'gridstack',
        // 'bootstrap-sass' // leave in app.js to resolve load order issue
    ]);

if (mix.config.inProduction) {
    mix.version();
}
