import Vue from 'vue'
import VueRouter from 'vue-router'

import Test1 from './pages/Test1.vue'
import Test2 from './pages/Test2.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: Test1
  },
  {
    path: '/test2',
    component: Test2
  },
]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router