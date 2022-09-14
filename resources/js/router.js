import Vue from 'vue'
import VueRouter from 'vue-router'

import Login from './pages/Login.vue'
import Register from './pages/Register.vue'
import Test1 from './pages/Test1.vue'
import Test2 from './pages/Test2.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: Test1
  },
  {
    path: '/login',
    component: Login
  },
  {
    path: '/register',
    component: Register
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