import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'rp-100': '#F09DC6',
                'rp-200': '#ED8DBD',
                'rp-300': '#EB7CB4',
                'rp-400': '#E14091',
                'rp-500': '#e65ca1',
                'rp-600': '#E14091',
                'rp-700': '#DD2481',
                'ob-200': '#2C3242',
                'ob-500': '#12192b'
            }
        }
    },

    plugins: [forms],
};
