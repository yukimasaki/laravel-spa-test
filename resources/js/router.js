import Vue from 'vue'
import VueRouter from 'vue-router'
import store from './store'

import Login from './pages/Login.vue'
import Register from './pages/Register.vue'
import SystemError from './pages/errors/System.vue'
import LicenseList from './pages/LicenseList.vue'

//test
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
    component: Login,
    beforeEnter (to, from, next) {
      if (store.getters['auth/check']) {
        next('/')
      } else {
        next()
      }
    }
  },
  {
    path: '/register',
    component: Register
  },
  {
    path: '/test2',
    component: Test2
  },
  {
    path: '/500',
    component: SystemError
  },
  {
    path: '/licenses',
    component: LicenseList
  }
]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router