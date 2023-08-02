/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'mypink': {
          light: '#f00082',
          dark: '#d70074'
        },
        'mypurple': {
          light: '#7000ff',
          dark: '#6900ee'
        }
      }
    }
  },
  plugins: [
      require('flowbite/plugin')
  ],
}