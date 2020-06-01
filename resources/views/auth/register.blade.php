@extends('layouts.signup')

@section('content')
    <div id="signup">
        <form novalidate class="md-layout" @submit.prevent="validateUser">
            @csrf
            <md-card class="md-layout-item md-xsmall-size-100">
                <md-card-header>
                    <div class="md-title">New User - Venn Calculator</div>
                </md-card-header>

                <md-card-content>
                    <md-field>
                        <label for="firstname">First Name</label>
                        <md-input type="text" name="firstname" id="firstname" v-model="form.firstname" :disabled="sending" />
                        <span class="md-error" v-if="!$v.form.firstname.required">Your first name is required</span>
                        <span class="md-error" v-if="!$v.form.firstname.minlength">Your first name is too short</span>
                    </md-field>

                    <md-field>
                        <label for="lastname">Last Name</label>
                        <md-input type="text" name="lastname" id="lastname" v-model="form.lastname" :disabled="sending" />
                        <span class="md-error" v-if="!$v.form.lastname.required">Your last name is required</span>
                        <span class="md-error" v-if="!$v.form.lastname.minlength">Your last name is too short</span>
                    </md-field>

                    <md-field>
                        <label for="email">Email</label>
                        <md-input type="email" name="email" id="email" autocomplete="email" v-model="form.email" :disabled="sending" />
                        <span class="md-error" v-if="!$v.form.email.required">Your email is required</span>
                        <span class="md-error" v-else-if="!$v.form.email.email">Invalid email</span>
                    </md-field>

                    <md-field>
                        <label for="password">Password</label>
                        <md-input type="password" name="password" id="password" v-model="form.password" :disabled="sending" />
                        <span class="md-error" v-if="!$v.form.password.required">Your password is required</span>
                        <span class="md-error" v-else-if="!$v.form.password.minlength">Your password is too short</span>
                    </md-field>

                    <md-field>
                        <label for="password_confirmation">Confirm Password</label>
                        <md-input type="password" name="password_confirmation" id="password_confirmation" v-model="form.password_confirmation" :disabled="sending" />
                        <span class="md-error" v-if="!$v.form.password_confirmation.required">Your password confirmation is required</span>
                        <span class="md-error" v-else-if="!$v.form.password_confirmation.minlength">Your password is too short</span>
                    </md-field>

                </md-card-content>

                <md-card-actions>
                    <md-button href="/" type="button" class="md-secondary">Already a User? Click here</md-button>
                    <md-button type="submit" class="md-primary" :disabled="sending">Sign up</md-button>
                </md-card-actions>
            </md-card>
        </form>
    </div>
@endsection
