@extends('layouts.login')

@section('content')
    <div id="login">
        <form novalidate class="md-layout" @submit.prevent="validateUser">
            @csrf
            <md-card class="md-layout-item md-xsmall-size-100">
                <md-card-header>
                    <div class="md-title">Venn Calculator Login</div>
                </md-card-header>

                <md-card-content>

                    <md-field :class="getValidationClass('email')">
                        <label for="email">Email</label>
                        <md-input type="email" name="email" id="email" autocomplete="email" v-model="form.email" :disabled="sending" />
                        <span class="md-error" v-if="!$v.form.email.required">The email is required</span>
                        <span class="md-error" v-else-if="!$v.form.email.email">Invalid email</span>
                    </md-field>

                    <md-field :class="getValidationClass('password')">
                        <label for="password">Password</label>
                        <md-input type="password" name="password" id="password" v-model="form.password" :disabled="sending" />
                        <span class="md-error" v-if="!$v.form.password.required">The password is required</span>
                        <span class="md-error" v-else-if="!$v.form.password.minlength">The password is required</span>
                    </md-field>

                </md-card-content>

                <md-card-actions>
                    <md-button href="/register" type="button" class="md-secondary">New User? Click here</md-button>
                    <md-button type="submit" class="md-primary" :disabled="sending">Login</md-button>
                </md-card-actions>
            </md-card>
        </form>
    </div>
    <script src="<?php echo URL::to('/'); ?>/js/login.js"></script>
@endsection


