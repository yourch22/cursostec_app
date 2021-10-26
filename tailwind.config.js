module.exports = {
  purge: [],
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    extend: {
      colors: {
        yellow: {
          450: '#ffb606'
        },
        gray: {
          950: '#111111'
        },
        blue:{
          '750': "#31367a",
          '850': "#3e416d",
        }
      }
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
