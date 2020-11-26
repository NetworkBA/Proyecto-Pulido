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
      path: '/PradredeFamilia',
      name: 'PradredeFamilia',
      component: () => import("./components/PradredeFamilia.vue"),
      props: true
    },
    {
      path: '/Estudiante',
      name: 'Estudiante',
      component: () => import("./components/Estudiante.vue"),
      props: true
    },
    {
      path: '/Materia',
      name: 'Materia',
      component: () => import("./components/Materia.vue"),
      props: true
    },
    {
      path: '/Clase',
      name: 'Clase',
      component: () => import("./components/Clase.vue"),
      props: true
    },

  ],
  mode: 'history'

  })
