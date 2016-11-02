module.exports = {
    entry: './js/app.js',
    output: {
        filename: './js/bundle.js'
    },
    module:
      loaders: [
        {
          test:/\.scss$/,
          loaders:['style-loader','css-loader', 'sass-loader']
        }
      ]
};
