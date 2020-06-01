import Vue from 'vue';
import VueMaterial from 'vue-material';
import 'vue-material/dist/vue-material.min.css';
import 'vue-material/dist/theme/default-dark.css' ;
import axios from 'axios';

import { validationMixin } from 'vuelidate'
import {
    required,
    email,
    minLength,
    maxLength
} from 'vuelidate/lib/validators'

window.axios = axios;
Vue.use(VueMaterial);

new Vue({ 
    el: '#login',
    name: 'Login',
    mixins: [validationMixin],
    data() {
        return {
            form: {
                email: null,
                password: null
            },
            isValidated: false,
            sending: false,
            lastUser: null     
        } 
    },
    validations: {
        form: {
            email: {
                required,
                email,
                maxLength: maxLength(255)
            },
            password: {
                required,
                minLength: minLength(1),
                maxLength: maxLength(255)
            }
        }
    },
    methods: {
        getValidationClass (fieldName) {
            const field = this.$v.form[fieldName]

            if (field) {
                return {
                    'md-invalid': field.$invalid && field.$dirty
                }
            }
        },
        clearForm () {
            this.$v.$reset()
            this.form.email = null
            this.form.password = null
        },
        login () {
            this.sending = true

            axios.post('/login', this.form)
                .catch(error => console.log(error));
        },
        validateUser () {
            this.$v.$touch()

            if (!this.$v.$invalid) {
                this.login()
            }
        }
    }
});
