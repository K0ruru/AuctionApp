/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        yellowtail: ['"Yellowtail"', ...defaultTheme.fontFamily.sans],
        poppins: ['"Poppins"', ...defaultTheme.fontFamily.sans]
      },
      boxShadow: {
        '3xl': '-9px 7px 22px 1px rgba(0,0,0,0.38)',
      },
    }
  },
  plugins: [
        require('flowbite/plugin')
    ],
}

