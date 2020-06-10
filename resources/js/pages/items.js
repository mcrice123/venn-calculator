import Vue from 'vue';
import VueMaterial from 'vue-material';
import 'vue-material/dist/vue-material.min.css';
import 'vue-material/dist/theme/default-dark.css' ;

Vue.use(VueMaterial);

new Vue({
    el: '#items',
    mounted: function() {
        console.log("ITEMS mounted!");
    }
});

