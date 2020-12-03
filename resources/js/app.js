/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('../../vendors/css/style.css');
require('../../vendors/css/font-awesome.min.css');
require('../../vendors/css/simple-line-icons.min.css');


require('../../vendors/js/jquery.min.js');
require('../../vendors/js/popper.min.js');
require('../../vendors/js/bootstrap.min.js');
//require('../../vendors/js/pace.min.js');
require('../../vendors/js/Chart.min.js');
require('../../vendors/js/template.js');







window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('menu-component', require('./components/MenuComponent.vue').default);
Vue.component('contenido-component', require('./components/Contenido.vue').default);
Vue.component('Administrativos', require('./views/Administrativos.vue').default);
Vue.component('Profesores', require('./views/Profesores.vue').default);
Vue.component('InfiniteLoading', require('vue-infinite-loading').default);
Vue.component('PradredeFamili', require('./views/PradresdeFamilia.vue').default);
Vue.component('Estudiantes', require('./views/Estudiantes.vue').default);
Vue.component('Materias', require('./views/Materias.vue').default);
Vue.component('Clases', require('./views/Clases.vue').default);
Vue.component('menu-Profesor', require('./components/MenuProfesor.vue').default);
Vue.component('VistaProfe', require('./views/VistaProfe.vue').default);

Vue.component('menu-componentx', require('./components/MenuProfesor.vue').default);






import router from './routes'



const app = new Vue({
    el: '#app',
    router
});
