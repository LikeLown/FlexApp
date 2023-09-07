import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./app/Filament/**/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                custom: ["Bahnschrift", "sans-serif"],
            },
        },
    },

    plugins: [forms, typography, require("daisyui")],
    daisyui: {
        themes: [
            {
                equans: {
                    primary: "#002439",
                    secondary: "#70BD95",
                    accent: "#FF9600",
                    neutral: "#171d14",
                    "base-100": "#ffffff",
                },
            },
            "dark",
            "light",
        ],
    },
};
