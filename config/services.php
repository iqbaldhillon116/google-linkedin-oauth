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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '520407134686-e8qro6jcbo7iv7fh8k4n0togqpqm0drb.apps.googleusercontent.com',
        'client_secret' => 'tWwJBhOmPhJlA46CLkCz0fpN',
        'redirect' => env('APP_URL').':8000/auth/google/callback',
    ],

    	'linkedin' => [
        'client_id' => '86ci2jh3qedc6d',
        'client_secret' => '66mAws3WGrmbiy5H',
        'redirect' => 'http://localhost:8000/linkedin/callback',
        ],

        
    	// 'linkedin' => [
        // 'client_id' => '86i83r9apd34bh',
        // 'client_secret' => '2PUgShcKKJDMLIuF',
        // 'redirect' => env('APP_URL').':8000/auth/linkedin/callback',
        // ],
];
