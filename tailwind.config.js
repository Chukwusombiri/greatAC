const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    light: '#d1d5db',
                    lighter: '#f3f4f6',
                    dark: '#030712',
                    indigo: '#1e1b4b',
                },
            },
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                      color: '#d1d5db',
                      h1: {
                        color: '#d1d5db',
                      },
                      h2: {
                        color: '#d1d5db',
                      },
                      h3: {
                        color: '#d1d5db',
                      },
                      h4: {
                        color: '#d1d5db',
                      },
                      h5: {
                        color: '#d1d5db',
                      },
                      'strong': {
                        color: theme('colors.blue.600'),
                      },
                    },
                  },
            }),
        }
    },

    plugins: [
        require('@tailwindcss/forms'), 
        require('@tailwindcss/typography'),
        function ({ addUtilities }) {
            addUtilities({
                '.my-bg-gradient': {
                    background: 'linear-gradient(to right, #1d4ed8, #7e22ce)',
                },
                '.my-bg-gradient:hover': {
                    background: 'linear-gradient(to right, #7e22ce, #1d4ed8)',
                },
            }, ['responsive', 'hover']);
        },
    ],
};
