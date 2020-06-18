module.exports = {
    theme: {
        extend: {
            fontFamily: {
                'roboto': ['Roboto', 'sans-serif'],
            },
            colors: {
                green: {
                    750: '#668053',
                },
                grey: {
                    'charcoal': '#373F51',
                    1000: '#878B96',
                }
            }
        },
    },
    variants: {},
    plugins: [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]
}
