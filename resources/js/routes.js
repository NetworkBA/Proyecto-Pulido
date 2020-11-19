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
        props: true
      },
      {
        path: '/Profesor',
        name: 'profesor',
        component: () => import("./components/ExampleComponent.vue"),
        props: true
    },
    {
      path: '/Home',
      name: 'Principal',
      component: () => import("./views/Vistaprincipal.vue"),
      props: true
    },
  ],
  mode: 'history'

  })
