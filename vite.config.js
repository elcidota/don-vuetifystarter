import vue from '@vitejs/plugin-vue';
import vuetify from 'vite-plugin-vuetify'
import { defineConfig } from 'vite';
import path from 'path';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    resolve: {
        alias: {
            '@': path.resolve(__dirname, './resources/js'),
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
        vue(),
        vuetify({ autoImport: true }),
    ],
});
