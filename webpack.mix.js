let mix = require('laravel-mix');

mix.js('src/scripts.js', 'assets/js/scripts.js');
mix.postCss('src/style.css', 'assets/css', [
  require('tailwindcss'),
]);
