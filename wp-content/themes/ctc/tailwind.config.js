const colors = require('tailwindcss/colors');
const ctcColors = {
  blue: {
    300: '#D4DBE0',
    400: '#C2CDD4',
    500: '#AEC3D1',
    600: '#7A9AAE',
    700: '#4A677A',
  },
  plum: {
    300: '#8F8A99',
    400: '#6E6879',
    500: '#54505B',
    700: '#393345',
    800: '#272132',
    900: '#1C1626',
  },
  cream: {
    300: '#FFFAF5',
    400: '#F9EDE4',
    500: '#DED2CC',
  },
  brown: {
    400: '#EBC6A5',
    600: '#B5906F',
    700: '#8F735E',
    800: '#664E3F',
    900: '#3E2A1D',
  },
};
const ctcFonts = {
  sans: [ 'brandon-grotesque', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', "Segoe UI", 'Roboto', "Helvetica Neue", 'Arial', "Noto Sans", 'sans-serif', "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"],
  mono: ['odisseia', 'ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', "Liberation Mono", "Courier New", 'monospace'],
};

module.exports = {
  important: true,
  mode: 'jit',
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.php',
      './resources/**/*.vue',
      './resources/**/*.js',
    ],
    safelist: [
      'prose',
      'prose-dark',
    ]
  },
  darkMode: 'media',
  theme: {
    fontFamily: {
      sans: ctcFonts.sans,
      mono: ctcFonts.mono,
    },
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: '#fcfcfc',
      gray: colors.warmGray,
      red: colors.red,
      yellow: colors.amber,
      blue: ctcColors.blue,
      plum: ctcColors.plum,
      cream: ctcColors.cream,
      brown: ctcColors.brown,
    },
    extend: {
      minHeight: {
        half: '50vh',
      },
      spacing: {
        'screen-half': '50vw',
      },
      zIndex: {
        '60': 60,
      },
      typography: {
        DEFAULT: {
          css: {
            color: ctcColors.plum[500],
            h1: {
              color: ctcColors.plum[900],
            },
            h2: {
              color: ctcColors.plum[900],
            },
            h3: {
              color: ctcColors.plum[900],
            },
            h4: {
              color: ctcColors.plum[900],
            },
            h5: {
              color: ctcColors.plum[900],
            },
            h6: {
              color: ctcColors.plum[900],
            },
            strong: {
              fontWeight: '700',
              color: ctcColors.plum[900],
            },
            a: {
              color: ctcColors.plum[900],
              textDecoration: 'none',
              borderBottomWidth: '1px',
              borderColor: ctcColors.brown[900],
              transition: '0.3s ease',
              '&:hover': {
                color: ctcColors.brown[900],
                textDecoration: 'none',
                borderBottomWidth: '0',
              },
              '&:focus': {
                color: ctcColors.brown[900],
                textDecoration: 'none',
                borderBottomWidth: '0',
              }
            },
            'ol li': {
              color: ctcColors.plum[500],
              '&:before': {
                color: ctcColors.brown[800],
              },
            },
            'ul li': {
              color: ctcColors.plum[500],
              '&:before': {
                backgroundColor: ctcColors.brown[800],
              },
            },
            hr: {
              borderColor: colors.warmGray[700],
            },
            tbody: {
              tr: {
                borderBottomColor: colors.warmGray[500],
              },
            },
            thead: {
              color: ctcColors.plum[900],
            },
            pre: {
              backgroundColor: colors.warmGray[800],
            },
            code: {
              color: ctcColors.plum[900],
            },
            blockquote: {
              color: ctcColors.plum[500],
              borderLeftColor: colors.warmGray[700],
            },
          },
        },
        dark: {
          css: {
            color: ctcColors.cream[500],
            h1: {
              color: ctcColors.cream[300],
            },
            h2: {
              color: ctcColors.cream[300],
            },
            h3: {
              color: ctcColors.cream[300],
            },
            h4: {
              color: ctcColors.cream[300],
            },
            h5: {
              color: ctcColors.cream[300],
            },
            h6: {
              color: ctcColors.cream[300],
            },
            strong: {
              fontWeight: '700',
              color: ctcColors.cream[300],
            },
            a: {
              color: ctcColors.cream[300],
              textDecoration: 'none',
              borderBottomWidth: '1px',
              borderColor: ctcColors.brown[400],
              transition: '0.3s ease',
              '&:hover': {
                color: ctcColors.brown[400],
                textDecoration: 'none',
                borderBottomWidth: '0',
              },
              '&:focus': {
                color: ctcColors.brown[400],
                textDecoration: 'none',
                borderBottomWidth: '0',
              }
            },
            'ol li': {
              color: ctcColors.cream[500],
              '&:before': {
                color: colors.warmGray[500],
              },
            },
            'ul li': {
              color: ctcColors.cream[500],
              '&:before': {
                backgroundColor: colors.warmGray[500],
              },
            },
            hr: {
              borderColor: colors.warmGray[700],
            },
            tbody: {
              borderColor: colors.warmGray[700],
            },
            thead: {
              color: ctcColors.cream[300],
            },
            pre: {
              backgroundColor: colors.warmGray[800],
            },
            code: {
              color: ctcColors.cream[300],
            },
            blockquote: {
              color: ctcColors.cream[500],
              borderLeftColor: colors.warmGray[700],
            },
          },
        },
      },
    },
  },
  variants: {
    extend: {
      typography: [ 'dark' ],
      textDecoration: ['group-hover'],
      translate: ['group-hover'],
      opacity: ['group-hover', 'hover'],
    },
  },
  plugins: [require('@tailwindcss/typography')],
};
