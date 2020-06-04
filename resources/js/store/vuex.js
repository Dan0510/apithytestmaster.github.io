import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

import auth from './modules/auth'

const modules = {
  auth
}

const vuex = new Vuex.Store({
  modules
})

export default vuex

