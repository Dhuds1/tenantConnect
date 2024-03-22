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
                "rp-100": "#F09DC6",
                "rp-200": "#ED8DBD",
                "rp-300": "#EB7CB4",
                "rp-400": "#E14091",
                "rp-500": "#e65ca1",
                "rp-600": "#E14091",
                "rp-700": "#DD2481",
                "ob-0": "#c6c8cc",
                "ob-100": "#DFE5F2",
                "ob-200": "#C0CAE5",
                "ob-900": "#12192b",
                "yl-300": "#FFF7D1",
                "yl-500": "#ffe666",
                'tur-100': "#F0FFFC",
                'tur-200': "#E0FFFA",
                'tur-500': "#66ffe5",
                'link-active': "#2C3242",
                'link-text': '#D3D5D8',
            },
        },
    },

    plugins: [forms],
};
