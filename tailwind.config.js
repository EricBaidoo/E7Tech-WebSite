/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./solutions/*.php",
    "./products/*.php",
    "./includes/*.php",
    "./components/*.php"
  ],
  theme: {
    extend: {
      colors: {
        navy: {
          800: '#16224A',
          900: '#0A1128',
        },
        cyan: {
          400: '#4FACFE',
          500: '#00F2FE',
        },
        brand: {
          blue: '#0052cc',
          light: '#FAFAFA'
        }
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      }
    }
  },
  plugins: [],
}
