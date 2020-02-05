require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource';

Vue.use(VueRouter);
Vue.use(VueResource);

let routes = [
    { path: '/admin-registration', component: require('./components/registration.vue').default },
    { path: '/login', component: require('./components/login.vue').default },
];

const router = new VueRouter({
    routes: routes,
    mode: 'hash'
});

const app = new Vue({
    el: '#app',
    router,
});
