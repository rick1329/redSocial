import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'primary': '#6225E6',
                'secondary': '#dc2626',
                'dark': '#333333ff'
            },
            backgroundColor: {
                'primary': '#6225E6',
                'secondary': '#dc2626',
                'dark': '#333333ff'
            },
            borderColor: {
                'primary': '#6225E6',
                'secondary': '#dc2626',
                'dark': '#333333ff'
            },
            divideColor: {
                'primary': '#6225E6',
                'secondary': '#dc2626',
                'dark': '#333333ff'
            },
            fill: {
                'primary': '#6225E6',
                'secondary': '#dc2626',
                'dark': '#333333ff'
            },
            stroke: {
                'primary': '#6225E6',
                'secondary': '#dc2626',
                'dark': '#333333ff'
            },
            boxShadow: {
                'button': '6px 6px 0 black',
                'button-h': '10px 10px 0 #dc2626',
                'input': '7px 7px 0px 0px black'
            }
        },
    },

    plugins: [forms, typography, require("daisyui")],
};
