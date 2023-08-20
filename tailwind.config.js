import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};

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
  variants: {
    extend: {
      display: ['group-focus']
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}
