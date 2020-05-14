<template>
    <div>
        <form novalidate class="md-layout" @submit.prevent="validateUser" action="<?php echo URL::to('/'); ?>/dashboard">
            <md-card class="md-layout-item md-xsmall-size-100">
                <md-card-header>
                    <div class="md-title">Venn Calculator Login</div>
                </md-card-header>

                <md-card-content>

                    <md-field>
                        <label for="email">Email</label>
                        <md-input type="email" name="email" id="email" autocomplete="email" v-model="form.email" :disabled="sending" />
                        <span class="md-error" v-if="!$v.form.email.required">The email is required</span>
                        <span class="md-error" v-else-if="!$v.form.email.email">Invalid email</span>
                    </md-field>

                    <md-field>
                        <label for="password">Password</label>
                        <md-input type="password" name="password" id="password" v-model="form.password" :disabled="sending" />
                        <span class="md-error" v-if="!$v.form.password.required">The password is required</span>
                        <span class="md-error" v-else-if="!$v.form.password.minlength">The password is required</span>
                    </md-field>

                </md-card-content>

                <md-progress-bar md-mode="indeterminate" v-if="false" />

                <md-card-actions>
                    <md-button type="submit" class="md-primary" :disabled="sending">Login</md-button>
                </md-card-actions>
            </md-card>
        </form>
    </div>
</template>

<script>
    import { validationMixin } from 'vuelidate'
    import {
        required,
        email,
        minLength,
        maxLength
    } from 'vuelidate/lib/validators'

    export default {
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
                    email
                },
                password: {
                    required,
                    minLength: minLength(1)
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

                // Instead of this timeout, here you can call your API
                /*  window.setTimeout(() => {
                    this.lastUser = `${this.form.firstName} ${this.form.lastName}`
                    this.isValidated = true
                    this.sending = false
                    this.clearForm()
                }, 1500) */ 


            },
            validateUser () {
                this.$v.$touch()

                if (!this.$v.$invalid) {
                    this.login()
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    .md-progress-bar {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
    }
    .md-layout {
        padding-top: 50px;
    }
    .md-card {
        margin: 0 auto;
        max-width: 400px;
    }
</style>
