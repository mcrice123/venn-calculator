import Signup from './views/Signup.vue';
import Vue from 'vue';
import VueMaterial from 'vue-material';
import 'vue-material/dist/vue-material.min.css';
import 'vue-material/dist/theme/default-dark.css' ;

Vue.use(VueMaterial);

new Vue({ 
    el: '#signup',
    components: {
        Signup
    },
    template: '<signup></signup>'
});
