import Vue from 'vue';
import VueMaterial from 'vue-material';
import VueRouter from 'vue-router';
import 'vue-material/dist/vue-material.min.css';
import 'vue-material/dist/theme/default-dark.css' ;

//import Dashboard from './views/Dashboard.vue';
import routes from './routes';
const linkActiveClass = 'router-link-active';

// pass custom class to Vue Material
//Vue.material.router.linkActiveClass = linkActiveClass;

// pass custom class to Vue Router
const router = new VueRouter({
  routes,
  linkActiveClass
});

Vue.use(VueMaterial);

new Vue({
    el: '#app',

   // components: {
   //     Dashboard,
  //  },

   // template: '<dashboard></dashboard>',

    router

});


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

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


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
