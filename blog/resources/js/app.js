require('./bootstrap');
//require('./vuetify');
window.Vue = require('vue');

//import vuetify from './vuetify';
import App from './App.vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import {routes} from './routes';

Vue.use(VueRouter);
//Vue.use(vuetify);
Vue.use(VueAxios, axios);

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
	
    el: '#app',
    router: router,
    render: h => h(App),
});