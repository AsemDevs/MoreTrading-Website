/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: '#6371F4',     // Customize the primary color
        secondary: '#251F6E',   // Customize the secondary color
        tertiary: '#848484',    // Customize the tertiary color
        quaternary: '#474747',  // Customize the quaternary color
      },
      fontSize: {
        'xs': '1rem',
        'sm': '1.125rem',
        'm': '1.5rem',
        'lg': '2rem',
        'xl': '3rem',
        '2xl': '4rem',
        '3xl': '5rem',
        '4xl': '6rem',
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
