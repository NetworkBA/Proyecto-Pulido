import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router(
  {
    routes: [ {
        path: '/profesor',
        name: 'profesor',
        component: require('./views/Profesor')
    },
  ],
  mode: 'history'

  })
