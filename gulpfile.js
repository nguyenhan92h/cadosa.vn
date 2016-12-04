const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js')

        /**
         * Combine pre-processed frontend CSS files
         */
        .styles([
            'app.css',
            'jquery.bxslider.css'
        ], 'public/css/app.css')

        /**
        * Combine frontend scripts
        */
        .scripts([
            'plugins.js',
            'jquery.bxslider.min.js'
        ], 'public/js/plugins.js');
});
