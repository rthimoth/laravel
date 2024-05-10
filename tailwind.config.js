const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontSize: {
                'xxs': '.625rem', // 10px
                'xxx-small': '.5rem', // 8px
              },
            minHeight: {
                '1/2': '50%',
            },
            screens: {
                '3xl': '2000px',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'custom':'#262D34',
                'gun':'#C5D0E6',
                'customorange' : '#FF571A',
                'customgray': '#2C353D',
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
