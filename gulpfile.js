const elixir = require('laravel-elixir');

require('laravel-elixir-vue');


elixir(mix => {
    mix.sass(['app.scss', 'main.scss'], 'public/css/all.css')
       .webpack('app.js').version(['css/all.css', 'js/app.js']);

});

