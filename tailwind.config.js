module.exports = {
    purge: process.env.NODE_ENV === "production" ? [
        './**/*.php',
    ] : [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
