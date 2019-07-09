import Vue from 'vue'
import VueRouter from 'vue-router'
import CarbonComponentsVue from '@carbon/vue/src/index';

Vue.use(VueRouter)
Vue.use(CarbonComponentsVue)

import App from './views/App'
import Hello from './views/Hello'
import Home from './views/Home'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
