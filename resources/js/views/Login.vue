<template>
    <div>
        <form novalidate class="md-layout" @submit.prevent="validateUser">
            <md-card class="md-layout-item md-xsmall-size-100">
                <md-card-header>
                    <div class="md-title">Venn Calculator Signup</div>
                </md-card-header>

                <md-card-content>

                    <md-field>
                        <label for="email">Email</label>
                        <md-input type="email" name="email" id="email" autocomplete="email" :disabled="false" />
                    </md-field>

                    <md-field>
                        <label for="password">Password</label>
                        <md-input type="password" name="password" id="password" :disabled="false" />
                    </md-field>

                    <!--
                    <md-field :class="getValidationClass('email')">
                        <label for="email">Email</label>
                        <md-input type="email" name="email" id="email" autocomplete="email" v-model="form.email" :disabled="sending" />
                        <span class="md-error" v-if="!$v.form.email.required">The email is required</span>
                        <span class="md-error" v-else-if="!$v.form.email.email">Invalid email</span>
                    </md-field>
                    -->
                </md-card-content>

                <md-progress-bar md-mode="indeterminate" v-if="false" />

                <md-card-actions>
                    <md-button type="submit" class="md-primary" :disabled="false">Sign Up</md-button>
                </md-card-actions>
            </md-card>

        <!-- <md-snackbar :md-active.sync="userSaved">The user {{ lastUser }} was saved with success!</md-snackbar>-->
        </form>
    </div>
</template>

<script>
    export default {
        name: 'Login'
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
