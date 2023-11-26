module.exports = {
  purge: [
    './**/*.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Surt', 'Helvetica', 'Arial', 'sans-serif']
      },
      colors: {
        'gray-landing': '#e6e6e6',
        pink: {
          '50':  '#fbfbfb',
          '100': '#f6f1f3',
          '200': '#fbd4e0',
          '300': '#F5AFCA',
          '400': '#df7296',
          '500': '#c84a72',
          '600': '#ad2c50',
          '700': '#872139',
          '800': '#601725',
          '900': '#3e1015',
        },
        yellow: {
          '50':  '#faf9f1',
          '100': '#f8efa4',
          '200': '#eee061',
          '300': '#cfb826',
          '400': '#a6971b',
          '500': '#83790c',
          '600': '#686108',
          '700': '#514908',
          '800': '#373207',
          '900': '#261f06',
        }
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    function ({ addComponents }) {
      addComponents({
        '.container': {
          maxWidth: '100%',
          '@screen sm': {
            maxWidth: '700px',
          },
          '@screen md': {
            maxWidth: '800px',
          },
          '@screen lg': {
            maxWidth: '900px',
          },
          '@screen xl': {
            maxWidth: '1100px',
          },
        }
      })
    }
  ],
}
