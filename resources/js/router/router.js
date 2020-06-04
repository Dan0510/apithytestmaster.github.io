import  Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  linkActiveClass: 'active',
  routes: [
    {
      path: '/',
      name: 'users.index',
      component: () => import('../pages/Users')
    },
    {
      path: '/import-users',
      name: 'users.import',
      component: () => import('../pages/ImportUsers')
    }
  ]
})

router.beforeEach((to, from, next) => {
  next()
})

export default router
