import './bootstrap'
import Vue from 'vue';
import Vuetify from './plugins/vuetify'
import router from './router'
import App from './App.vue'

const app = new Vue({
    el: '#app',
    vuetify: Vuetify,
    router,
    components: {
        App,
    },
    template: '<App />'
});