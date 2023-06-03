/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: '#6371F4',     // Customize the primary color
        secondary: '#251F6E',   // Customize the secondary color
        tertiary: '#848484',    // Customize the tertiary color
      },
    },
  },
  plugins: [],
}
