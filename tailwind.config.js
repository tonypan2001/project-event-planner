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
          dark: '#d70074',
          lightest: '#F49ECD',
        },
        'mypurple': {
          light: '#7000ff',
          dark: '#6900ee',
          lightest: '#C89DFF',
        }
      }
    }
  },
  plugins: [
      require('flowbite/plugin')
  ],
}