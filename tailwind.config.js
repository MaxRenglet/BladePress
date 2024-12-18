/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./views/**.php', './assets/**/*.js'],
  theme: {
    extend: {
        fontFamily: {
            "unbounded": ['Unbounded', 'sans-serif']
        }
    },
    colors:{
      blue:'rgb(0,0,255)',
      cream:'rgb(255,255,150)'
    }
},
  plugins: [
    require('@tailwindcss/typography')
  ],
}

