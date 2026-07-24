import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    define: {
        '$': 'jquery',
        'jQuery': 'jquery',
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js','resources/css/bootstrap.css','resources/js/jquery.js','resources/js/bootstrap.js','resources/js/script.js'],
            refresh: true,
        }),
    ],
});
