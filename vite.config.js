import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
		'resources/scss/pages/index.scss',
		'resources/scss/pages/about.scss',
		'resources/scss/pages/contact.scss',
		'resources/scss/pages/roomDetails.scss',
		'resources/scss/pages/rooms.scss',
		'resources/scss/pages/offers.scss',
                'resources/css/app.css',
		'resources/scss/app.scss',
                'resources/js/app.js',
		'resources/js/formatDates.js',
		'resources/js/numbered-swiper.js',
		'resources/js/openMenu.js',
		'resources/js/swiper.js',
            ],
            refresh: true,
        }),
    ],
});
