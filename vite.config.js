import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    // config options
    build: {
        assetsDir:"images",
        // output options
        rollupOptions: {
            
            output: {
                // change the name of app.js
                entryFileNames: 'app.js',
                assetFileNames: 'app.css'
                
            }
        }
    }
});
