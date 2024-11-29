import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        colors: {
            primary: "#C5F277",
        },
        fontFamily: {
            sans: ["Poppins", ...defaultTheme.fontFamily.sans],
        },
    },
  },
  plugins: [],
}

