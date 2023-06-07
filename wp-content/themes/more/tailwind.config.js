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
      width: {
        '90vw': '90vw',
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
        '13': '50px',
        '22': '84px',
        '30': '122px',
        '98': '40rem',
      },
      scale: {
        '180': '1.8',
      },
      container: {
        center: true,
        screens: {
          sm: '640px',
          md: '868px',
          lg: '1024px',
          xl: '1280px',
          '2xl': '1380px',
        },
      },
    },
  },
  plugins: [],
}
