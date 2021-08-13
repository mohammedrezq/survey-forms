const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const CssMinimizerPlugin = require( 'css-minimizer-webpack-plugin' );
const cssnano = require( 'cssnano' ); // https://cssnano.co/
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );
const UglifyJsPlugin = require( 'uglifyjs-webpack-plugin' );



/**
 * Paths
 */

 const assetsFolder = 'assets';

 const mainAssets = path.resolve(
     __dirname,
     `${ assetsFolder }`
 );
 const mainDistentation = path.resolve(
     __dirname,
     `${ assetsFolder }/dist`
 );
 const entry = {
     main: `${mainAssets}/src/index.js`,
    //  form: `${mainAssets}/src/form.js`,
    //  slider: `${mainAssets}/src/slider.js`,
    //  auth: `${mainAssets}/src/auth.js`,
 }
 const output = {
     path: mainDistentation,
     filename: '[name].js',
 };
 
 const rules = [
     {
         test: /\.scss$/,
         exclude: /node_modules/,
         use: [ MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader' ],
     },
     {
         test: /\.js$/,
         exclude: /node_modules/,
         use: {
             loader: 'babel-loader',
             options: {
                 presets: [ [ '@babel/preset-env', { targets: 'defaults' } ] ],
             },
         },
     },
 ];
 
 const minimizing = [
     new CssMinimizerPlugin(),
 
     new UglifyJsPlugin( {
         cache: false,
         parallel: true,
         sourceMap: false,
     } ),
 ];
 
 /**
  * Note: argv.mode will return 'development' or 'production'.
  *
  * @param argv
  */
 const plugins = ( argv ) => [
     new CleanWebpackPlugin( {
         cleanStaleWebpackAssets: 'production' === argv.mode, // Automatically remove all unused webpack assets on rebuild, when set to true in production. ( https://www.npmjs.com/package/clean-webpack-plugin#options-and-defaults-optional )
     } ),
 
     new MiniCssExtractPlugin(),
 ];
 
 /**
  * Module Exports
  *
  * @param env
  * @param argv
  */
 module.exports = ( env, argv ) => ( {
     mode: 'development',
     context: mainAssets,
     entry,
     output,
     devtool: 'source-map',
     optimization: {
         minimize: true,
         minimizer: minimizing,
     },
     plugins: plugins( argv ),
     module: {
         rules,
     },
 } );
 