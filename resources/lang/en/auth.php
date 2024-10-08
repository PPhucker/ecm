<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    'passwords' => [
        'confirm' => [
            'action' => 'Password confirmation',
            'button' => 'Confirm password',
            'message' => 'Please confirm your password before continuing'
        ],
        'reset' => [
            'action' => 'Password reset',
            'button' => 'Reset the password',
            'mail' => [
                'message' => 'You received this email because we have received a password reset request for your account record.',
                'expire' => 'The password reset link will expire in :count minutes..'
            ],

        ],
        'email' => 'Send password reset link',
        'forgot' => 'Forgot your password?',
        'password' => 'Password',
    ],

    'login' => [
        'action' => 'Authorization',
        'button' => 'Login',
    ],

    'verify' => [
        'action' => 'E-mail confirmation',
        'link' => 'Link successfully sent to your e-mail',
        'button' => 'Send link again',
        'message' => 'Please check your corporate email for a confirmation link before proceeding',
        'mail' => [
            'verify' => 'Please click the button below to verify your email address.',
            'no_verify' => 'If you have not created an account, do not take any action.'
        ],
    ],

    'register' => [
        'action' => 'New User Registration',
        'button' => 'Register',
    ],

    'roles' => 'Roles',
    'permissions' => 'Permissions',

];
