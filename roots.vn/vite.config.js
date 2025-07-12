import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    theme: {
        screens: {
            xl: '1200px',
            lg: '1024px',
            size810: '810px',
            md: '768px',
            sm: '600px',
            size480: '480px',
            size430: '430px',
            size428: '428px',
            size414: '414px',
            size412: '412px',
            size390: '390px',
            size375: '375px',
            size360: '360px',
            size320: '320px',
            size100: '100px',
        },
    },
});
