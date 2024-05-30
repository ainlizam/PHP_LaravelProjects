import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            build: {
                outDir: 'public/build', // Adjust this path as needed
            },
            refresh: true,
        }),
    ],
});
