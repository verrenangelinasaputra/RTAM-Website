import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/components/navbar.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                oneui300: ['OneUI-SansGUI-300', 'sans-serif'],
                oneui400: ['OneUI-SansGUI-400', 'sans-serif'],
                oneui600: ['OneUI-SansGUI-600', 'sans-serif'],
                oneui700: ['OneUI-SansGUI-700', 'sans-serif'],
                samsungSharpBold: ['SamsungSharpSans-Bold', 'sans-serif'],
                samsungSharpMedium: ['SamsungSharpSans-Medium', 'sans-serif'],
                samsungSharpRegular: ['SamsungSharpSans-Regular', 'sans-serif'],
            },
            colors: {
                samsungBlue: '#0481FF',
                grayBackground: '#F6F6F6',
            },
        },
    },

    plugins: [forms],
};
