let mix = require('laravel-mix');

mix.js('src/landing.js', 'assets/js/landing.js');
mix.js('src/post.js', 'assets/js/post.js');

mix.postCss('src/style.css', 'assets/css', [
  require('tailwindcss'),
]);
