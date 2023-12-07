import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
      
    plugins: [
        vue(),
        laravel({
        input: [ 
            'resources/css/main.css',
            'resources/css/app.css', 
            'resources/assets/css/styles.css',
            'resources/assets/jquery-jvectormap.css',
            'resources/scss/app.scss',
            
            'resources/js/app.js',
            'resources/assets/jquery.min.js',
            'resources/assets/app.min.js',
            'resources/assets/app.init.js',
            'resources/assets/bootstrap.bundle.min.js',
            'resources/assets/simplebar.min.js',
            'resources/assets/sidebarmenu.js',
            'resources/assets/theme.js',
            'resources/assets/jquery-jvectormap.min.js',
            'resources/assets/apexcharts.min.js',
            'resources/assets/jquery-jvectormap-us-aea-en.js',
            'resources/assets/dashboard.js',
            'resources/assets/iconify-icon.min.js',
        ],
            refresh: true,
        }),
    ],
    
});