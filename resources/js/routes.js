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
        component: () => import("./components/Profesor.vue"),
        props: true
    },
    {
      path: '/Home',
      name: 'Principal',
      component: () => import("./views/Vistaprincipal.vue"),
      props: true
    },
    {
      path: '/Administrativo',
      name: 'Administrativo',
      component: () => import("./components/Administrativo.vue"),
      props: true
    },
    {
      path: '/Estudiantes',
      name: 'Estudiante',
      component: () => import("./components/Estudiantes.vue"),
      props: true
    },

  ],
  mode: 'history'

  })
