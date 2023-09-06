import preset from "./vendor/filament/support/tailwind.config.preset";

export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
    ],
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            {
                equans: {
                    ...require("daisyui/src/theming/themes")[
                        "[data-theme=light]"
                    ],
                    primary: "#002439",
                    secondary: "#70BD95",
                },
            },
            "dark",
            "light",
        ],
    },
};
