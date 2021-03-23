const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');

const {merge} = require('webpack-merge');
const common = require('./webpack.config.js');

module.exports = merge(common, {
    mode: "production",
    watch: false,
    optimization: {
        minimize: true,
        minimizer: [
            // For webpack@5 you can use the `...` syntax to extend existing minimizers (i.e. `terser-webpack-plugin`), uncomment the next line
            // `...`,
            new CssMinimizerPlugin(),
        ],
    },
})