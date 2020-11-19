import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router(
  {
    routes: [
      {
        path: '/Principal',
        name: 'Principal',
        component: () => import("./views/Vistaprincipal.vue"),
        props: true    },
      {
        path: '/Profesor',
        name: 'profesor',
        component: {template:'<h1>Holas Como estas</h1'}
    },
  ],
  mode: 'history'

  })
