module.exports = {
    theme: {
        extend: {
            margin: {
                '-7': '-1.75rem',
            },
            colors: {
                gray: {
                    bg: '#E4E4E4',
                    main: '#707070',
                },
                blue: {
                    main: '#008FA8',
                    darker: '#00798f',
                },
                brands: {
                    twitter: '#1DA1F2',
                    linkedin: '#0E76A8',
                    github: '#333333',

                }
            }
        }
    },
    variants: {},
    plugins: [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]
}
