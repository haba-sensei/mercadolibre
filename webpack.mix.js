const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js').version()
mix.js('resources/js/dash.js', 'public/dist/js').version()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .postCss('resources/css/dash.css', 'public/dist/css')

.webpackConfig(require('./webpack.config'))
    .copyDirectory('resources/json', 'public/dist/json')
    .copyDirectory('resources/fonts', 'public/dist/fonts')
    .copyDirectory('resources/images', 'public/dist/images')
    .browserSync({
        proxy: "blog2.test",
        files: ["resources/**/*.*"],
    });