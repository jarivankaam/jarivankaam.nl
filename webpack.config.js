const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  entry: {
    app: './private/ts/app.ts', // Your TypeScript entry point
    styles: './private/scss/style.scss', // Your SCSS entry point
  },
  output: {
    path: path.resolve(__dirname, 'public/assets'), // Outputs JS and CSS files here
    filename: '[name].bundle.js', // JS filenames
    clean: true, // Cleans the output directory before every build
  },
  module: {
    rules: [
      {
        test: /\.ts$/,
        use: 'ts-loader',
        exclude: /node_modules/,
      },
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader, // Extracts CSS into separate files
          'css-loader',                // Translates CSS into CommonJS
          'sass-loader',               // Compiles SCSS to CSS
        ],
        exclude: /node_modules/,
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '../css/[name].css', // Outputs CSS to public/css folder
    }),
  ],
  resolve: {
    extensions: ['.ts', '.js'], // Resolve these extensions
  },
  devServer: {
    static: {
      directory: path.resolve(__dirname, 'public'),
    },
    port: 8080,
    watchFiles: {
      paths: ['private/scss/**/*.scss', 'private/ts/**/*.ts'], // Watches SCSS and TS files
    },
    hot: false, // Hot Module Replacement is not useful for CSS file generation
  },
  mode: 'development', // Use 'production' for optimized output
};
