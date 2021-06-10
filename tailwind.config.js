// tailwind.config.js
const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        trueGray: colors.trueGray,
        orange: colors.orange,
        greenLime: colors.lime
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
