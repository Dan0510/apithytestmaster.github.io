const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')
const path = require('path')
const { CleanWebpackPlugin } = require('clean-webpack-plugin')

mix.setPublicPath(path.normalize('./public/apithy'))

mix.webpackConfig({
  output: {
    publicPath: '/apithy/',
    chunkFilename: 'chunks/[name].[chunkhash].js'
  },
  plugins: [
    new CleanWebpackPlugin({
      cleanOnceBeforeBuildPatterns: ['!.gitkeep']
    })
  ],
  externals: [
    require('webpack-require-http')
  ]
})

mix.js('resources/js/app.js', 'public/apithy/js')
mix.sass('resources/sass/app.scss', 'public/apithy/css')
mix.options({
  processCssUrls: false,
  postCss: [tailwindcss('./tailwind.config.js')]
})

if (mix.inProduction()) {
  mix.version()
}
