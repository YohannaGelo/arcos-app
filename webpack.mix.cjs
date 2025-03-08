const mix = require('laravel-mix');

// Compilar archivos CSS y JS
mix.js('resources/js/app.js', 'public/js')
   .css('resources/css/app.css', 'public/css')
   .version(); // Esto es para tener versiones hash de los archivos compilados
