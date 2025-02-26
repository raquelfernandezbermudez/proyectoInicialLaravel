import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import daisyui from "daisyui";

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
                CocoBubble: ["CocoBubble", "sans-serif"],
            },

            height: {
                "10v": "10vh",
                "15v": "15vh",
                "65v": "65vh",
                "75v": "75vh",
            },
            colors: {
                header: "#896a92",
                nav: "#d5c1db",
                main: "#FFFFFF",
                footer: "#896a92",
            },
        },
    },

    plugins: [forms, require("daisyui")],
};
