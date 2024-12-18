/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./views/**.php', './assets/**/*.js'],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography')
  ],
}

