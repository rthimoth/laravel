/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./src/pages/*.{html,js}",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            minHeight: {
                '1/2': '50%',
            },
            screens: {
                '3xl': '2000px',
            },
            colors: {
                primary: '#202225',
                secondary: '5865f2',
                gray: {
                    900: '#202225',
                    800: '#2f3136',
                    700: '#36393f',
                    600: '#4f545c',
                    400: '#d4d7dc',
                    300: '#e3e5e8',
                    200: '#ebedef',
                    100: '#f2f3f5',
                },
                'custom':'#262D34',
                'customyellow' : '#E69D45',
                'customorange' : '#FF571A',
                'customlightblue' : '#A0ECFF',
                'customdarkblue' : '#A0C0FF',
                'customdarkerblue' : '#015C92',
                'custommiddleblue' : '#2D82B5',
                'customsky' : '#B0C9E5',
                'custombluepurple' : '#6F5F90',
                'customgray': '#2C353D',
                'custompink': '#FF7B89',
                'customgraylightblue':'#A5CAD2',
                'charcoal':'#1B1B1B',
                'night':'#0C090A',
                'gun':'#C5D0E6',
                'rose':'#DB7093',
                'customgreen':"#94B447",
                'AmericanOrange':"#836054",
                'PhilippineOrange':"#FA6F01",
                'Tangelo':"#ECA484",
                'Coquelicot':"#F03801",
                'FerrariRed':"#EB1C01",
                'ElectricRed':"#C99584",
                'customwhite':"#ECE1EE",
                'customgrayrose':"#FAF0EF",
            },
            
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'title': "url('../pics/gradient.jpg')",
                'heart':"url('../pics/heart.png')",
            },

            fontFamily: {
                'secular':['Secular One', 'sans-serif'],
                'domine':['Domine', 'serif'],
                'bebas':['Bebas Neue', 'cursive'],
                'oswald': ['Oswald', 'sans-serif'],
                'openSans': ['Open Sans', 'sans-serif'],
                'greatvibes':['Great Vibes', 'cursive'],
                'yanice':["Yanice", "regular"],
                'goldleaf':["Goldleaf","bold"],
                'uniser':["UniserBold","bold"],
                'landasans':["LandasansMedium","medium"],
            },
        },
    },
    plugins: [
        //'@tailwindcss/jit': {},
        //require('flowbite/plugin'),
        //require('tailwindcss-textshadow'),
    ],
}
