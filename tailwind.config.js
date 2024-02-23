/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors') 

module.exports = {
  content: [
      './resources/**/*.blade.php',
      './vendor/bezhansalleh/filament-language-switch/resources/views/language-switch.blade.php',
      './vendor/filament/**/*.blade.php', 
  ],
  darkMode: 'class',
  theme: {
      extend: {
          colors: { 
              danger: colors.rose,
              primary: colors.green,
              success: colors.green,
              warning: colors.yellow,
          }, 
      },
  },
  plugins: [
      require('@tailwindcss/forms'), 
      require('@tailwindcss/typography'), 
  ],
}