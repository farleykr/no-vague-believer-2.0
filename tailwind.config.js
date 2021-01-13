const colors = require('tailwindcss/colors')

module.exports = {
  purge: {
    content: [
      'source/**/*.blade.php',
      'source/**/*.md',
      'source/**/*.html',
    ]
  },
  colors: {
    gray: colors.trueGray,
  },
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
