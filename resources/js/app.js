import './bootstrap'
import Vue from 'vue';
import Vuetify from './plugins/vuetify'
import router from './router'
import store from './store'
import App from './App.vue'

const createApp = async () => {
  await store.dispatch('auth/currentUser')

  new Vue({
    el: '#app',
    vuetify: Vuetify,
    router,
    store,
    components: {
        App,
    },
    template: '<App />'
  })
}

createApp()