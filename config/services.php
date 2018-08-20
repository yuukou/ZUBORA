<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => 661767170836376,
        'client_secret' => 'f9e8a60fe63f92be168ac3079684e4d5',
        'redirect' => 'http://localhost/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '510385642283-t6vs91jnnr1fgep7vfpit4d10055nkqa.apps.googleusercontent.com',
        'client_secret' => 'o9hc2DL5xLmN6ev23ND5wvoy',
        'redirect' => 'http://localhost/login/google/callback',
    ],
];
