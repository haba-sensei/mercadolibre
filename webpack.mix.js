const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js').version()
mix.js('resources/js/dash.js', 'public/dist/js').version()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .postCss('resources/css/dash.css', 'public/dist/css').version()
    .postCss('resources/css/dash_custom.css', 'public/dist/css').version()
    .postCss('resources/css/base_web.css', 'public/dist/css').version()


mix.webpackConfig(require('./webpack.config'))
mix.copyDirectory('resources/json', 'public/dist/json')
mix.copyDirectory('resources/fonts', 'public/dist/fonts')
mix.copyDirectory('resources/images', 'public/dist/images')
mix.copyDirectory('resources/scripts', 'public/dist/scripts')
mix.copyDirectory('resources/plugins', 'public/dist/plugins')
    .browserSync({
        proxy: "mercadolibre.test",
        files: ["resources/**/*.*"],
    });