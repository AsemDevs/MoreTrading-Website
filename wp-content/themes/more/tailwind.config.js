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
      fontSize: {
        's': '1rem',
        'm': '1.5rem',
        'lg': '2rem',
        'xl': '3rem',
        '2xl': '4rem',
      },
      spacing: {
        '22': '84px',
      },
      container: {
        center: true,
        screens: {
          sm: "100%",
          md: "100%",
          lg: "80vw",
          xl: "80vw",
        },
      },
    },
  },
  plugins: [],
}
