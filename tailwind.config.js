const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            festival: {
                200: '#ff8aa4',
                300: '#ff5b7f',
                400: '#ff2d5b',
                500: '#FF1649',
                600: '#e51341',
                700: '#b20f33',
                800: '#7f0b24',
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('flowbite/plugin')],
};
