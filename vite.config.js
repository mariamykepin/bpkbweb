import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        port: 4000,
        cors: {
          origin: '*', // Izinkan origin tertentu
          methods: ['GET', 'POST', 'PUT', 'DELETE'], // Metode HTTP yang diizinkan
        },
    },
});
