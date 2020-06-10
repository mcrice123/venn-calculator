import Vue from 'vue';
import VueMaterial from 'vue-material';
import 'vue-material/dist/vue-material.min.css';
import 'vue-material/dist/theme/default-dark.css' ;

import Suppliers from '../views/Suppliers';

Vue.use(VueMaterial);

new Vue({
    el: '#suppliers',
    components: { Suppliers }
});

