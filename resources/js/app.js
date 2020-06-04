import Vue from 'vue'
require('./bootstrap');
import router from './router/router'
import store from './store/vuex'
import vueApp from './App.vue'

const app = new Vue({
  el: '#app',
  router,
  store,
  render: h => h(vueApp)
})
