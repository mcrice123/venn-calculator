import Vue from 'vue';
import VueMaterial from 'vue-material';
import VueRouter from 'vue-router';
import 'vue-material/dist/vue-material.min.css';
import 'vue-material/dist/theme/default-dark.css' ;

import Dashboard from './views/Dashboard.vue';
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

    components: {
        Dashboard,
    },

    template: '<dashboard></dashboard>',

    router

});
