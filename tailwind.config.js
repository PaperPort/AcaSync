/** @type {import('tailwindcss').Config; } */
const defaultTheme = require('tailwindcss/defaultTheme');
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'blue': '#3D348B',
        'sky' : '#7678ED',
        'orange': '#F18701',
        'yellow': '#F7B801',
        'amber' : '#F35B04'
      },
      fontFamily: {
        'heading' : ['"Montserrat"', ...defaultTheme.fontFamily.sans],
        'default' : ['"Hind"', ...defaultTheme.fontFamily.sans]
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('tailwindcss-animated'),
  ],
}

