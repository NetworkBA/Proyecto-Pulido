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

import router from './routes'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
