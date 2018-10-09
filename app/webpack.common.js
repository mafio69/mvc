const {resolve} = require("path");

module.exports = {
    watch: true,
    watchOptions: {
        ignored: /node_modules/
    },
    entry: "./src/js/main.js",
    output: {
        path: resolve(__dirname, '../public/js/'),
        filename: "main.js"
    }
}