<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'google' => [
        'client_id' => '659422485423-prl1ic84hhef4v7td7cerskh5k42uru5.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/google/callback',
    ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'instamojo' => [
    'api_key'       => env('IM_API_KEY'),
    'auth_token'    => env('IM_AUTH_TOKEN'),
    'url'           => env('IM_URL'),
],

];
