import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    darkMode: "class", //Disables dark mode
    theme: {
        extend: {
            colors: {
                primary: "#0A84FF", // Bright Tech Blue
                secondary: "#141414", // Deep Black
                accent: "#FF6B00", // Electric Orange
                success: "#4ADE80", // Neon Green
                background: "#F5F5F5", // Soft Light Gray
                border: "#E0E0E0", // Light Gray
                text: "#212121", // Dark Gray
            },
            fontFamily: {
                heading: ["Montserrat", "sans-serif"],
                body: ["Lato", "sans-serif"],
                serif: ["Merriweather", "serif"],
                details: ['"Plus Jakarta Sans"'],
                inter: ["Inter", "system-ui", "sans-serif"],
            },
        },
    },
    plugins: [require("preline/plugin")],
};
