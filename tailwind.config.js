const colors = require('tailwindcss/colors');

module.exports = {
  purge: [],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        grey: '#364146',
        secondary: '#f7fafc',
        ternary: '#e2e8f0',
        background: {
          'primary': '#364146',
          'secondary': '#f7fafc',
          'ternary': '#e2e8f0',
          // primary: 'var(--bg-background-primary)',
          // secondary: 'var(--bg-background-secondary)',
          // ternary: 'var(--bg-background-ternary)',
        },
        transparent: 'transparent',

        black: '#000',
        white: '#fff'
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
