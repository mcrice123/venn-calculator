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
    el: '#signup',
    name: 'Signup',
    mixins: [validationMixin],
    data() {
        return {
            form: {
                firstname: null,
                lastname: null,
                email: null,
                password: null,
                password_confirmation: null
            },
            isValidated: false,
            sending: false,
            lastUser: null     
        } 
    },
    validations: {
        form: {
            firstname: {
                required,
                minLength: minLength(1),
                maxLength: maxLength(255)
            },
            lastname: {
                required,
                minLength: minLength(3),
                maxLength: maxLength(255)
            },
            email: {
                required,
                email,
                maxLength: maxLength(255)
            },
            password: {
                required,
                minLength: minLength(1),
                maxLength: maxLength(255)
            },
            password_confirmation: {
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
            this.form.firstname = null
            this.form.lastname = null
            this.form.email = null
            this.form.password = null
            this.form.password_confirmation = null
        },
        signup() {
            this.sending = true

            axios.post('/register', this.form)
                .catch(error => console.log(error));
        },
        validateUser () {
            this.$v.$touch()

            if (!this.$v.$invalid) {
                this.signup()
            }
        }
    }
});
