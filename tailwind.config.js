const colors = require('tailwindcss/colors')
module.exports = {
  purge: [
    './src/**/*.html',
    './src/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        // Build your palette here
        transparent: 'transparent',
        current: 'currentColor',
        gray: colors.trueGray,
        red: colors.red,
        blue: colors.sky,
        lime: colors.lime,
        amber:colors.amber,
        gray:{
          900: '#283149',
          700: '#404b69',
          300: 'BFDCAE',
          100: '#F0EBCC',
        },
        red:{
          900: '#d72323'
        },
        green:{
          600: '#28DF99',
          300: '#99F3BD',
          100: '#D2F6C5',
        },
        blue:{
          600: '#3D84B8',
          700: '344FA1',
          900: '3F3697',
        }

      },
      flexGrow: {
        '5' : '5'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
