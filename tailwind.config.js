const defaultTheme = require('tailwindcss/defaultTheme');


module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    variants: {

        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },
    theme: {
        extend: {

            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            }


        },
    },

    plugins: [require('@tailwindcss/ui')],

    //aca deshabilito la clase container para crear uno nuevo

    corePlugins: {
        container: false
    }
};