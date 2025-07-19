import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import './bootstrap';
import { ZiggyVue } from 'ziggy-js';

// Vuetify styles
import '@mdi/font/css/materialdesignicons.css'
import 'vuetify/styles'
import { createVuetify } from 'vuetify'

// layout
import Layout from '@/layouts/app.vue'

const vuetify = createVuetify({
    theme: {
        defaultTheme: 'light', // 'light' | 'dark' | 'system'
    },
})

createInertiaApp({
    resolve: name => {
        // const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        // return pages[`./Pages/${name}.vue`]
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`]
        page.default.layout = page.default.layout || Layout
        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(vuetify)
            .mount(el)
    },
})
