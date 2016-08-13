<?php

return [
    'remember'                    => 'Remember me?',
    'login'                       => 'Login',
    'logout'                      => 'Logout',
    'register'                    => 'Register',
    'forgot'                      => 'Forgot your password?',
    'password_reset'              => 'Reset Password',
    'password_reset_instructions' => 'To reset your password, please enter your registered email address below.',
    'password_reset_send'         => 'Next',
    'profile'                     => 'Profile',

    'password_reset_email' => [
        'subject' => 'Reset your password',
        'before' =>  [
            'You are receiving this email because we received a password reset request for your account.',
            'Click the button below to reset your password:',
        ],
        'action' => 'Reset Password',
        'after'  => 'If you did not request a password reset, no further action is required.',
    ],
];
