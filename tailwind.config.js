import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        screens: {
            'xs': '355px',    // Extra small screens (custom value)
            'sm': '400px',    // Small screens (default Bootstrap value)
            'md': '768px',    // Medium screens (default Bootstrap value)
            'lg': '992px',    // Large screens (default Bootstrap value)
            'xl': '1200px',   // Extra large screens (default Bootstrap value)
            'xxl': '1400px',  // Extra extra large screens (custom value)
          },
    },

    plugins: [forms],
};
