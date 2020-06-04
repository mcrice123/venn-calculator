@extends('layouts.login')

@section('content')
    <div id="enter-email">
        <form novalidate action="{{ route('password.email') }}" method="POST" class="md-layout" @submit.prevent="validateUser">
            @csrf
            <md-card class="md-layout-item md-xsmall-size-100">
                <md-card-header>
                    <div class="md-title">Reset Password - Venn Calculator</div>
                </md-card-header>

                <md-card-content>
                    <md-field :class="getValidationClass('email')">
                        <label for="email">Email</label>
                        <md-input type="email" name="email" id="email" autocomplete="email" v-model="form.email" :disabled="sending" />
                        <span class="md-error" v-if="!$v.form.email.required">The email is required</span>
                        <span class="md-error" v-else-if="!$v.form.email.email">Invalid email</span>
                    </md-field>
                </md-card-content>

                <md-card-actions>
                    <md-button href="/register" type="button" class="md-secondary">New User?</md-button>
                    <md-button href="/" type="button" class="md-secondary">Login</md-button>
                    <md-button type="submit" class="md-primary" :disabled="sending">Send Password Reset</md-button>
                </md-card-actions>
            </md-card>
        </form>
    </div>
    <script src="<?php echo URL::to('/'); ?>/js/email.js"></script>
@endsection
