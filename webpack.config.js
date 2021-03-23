const MiniCssExtractPlugin = require("mini-css-extract-plugin")

const path = require("path")
module.exports = {
    mode: "development",
    output: {
        filename: "main.js",
        path: path.resolve("assets")
    },
    watch: true,
    plugins: [
        new MiniCssExtractPlugin(),
    ],
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    "css-loader",
                    {
                        loader: "postcss-loader",
                        options: {
                            postcssOptions: {
                                plugins: [
                                    [
                                        "postcss-preset-env",
                                        {
                                            // Options
                                        },
                                    ],
                                ],
                            },
                        },
                    },
                ],
            },
        ],
    },
}