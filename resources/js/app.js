import Vue from 'vue';
import VueMaterial from 'vue-material';
import 'vue-material/dist/vue-material.min.css';
import 'vue-material/dist/theme/black-green-dark.css' ;// This line here

import Dashboard from './Dashboard.vue';

Vue.use(VueMaterial);

new Vue({
    el: '#app',

    components: {
        Dashboard,
    },

    template: '<dashboard></dashboard>'

});