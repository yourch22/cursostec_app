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
    
    'apiudemy' => [
        'base_uri' => env('APIUDEMY_BASE_URI'),
        'client_id' => env('APIUDEMY_CLIENT_ID'),
        'client_secret' => env('APIUDEMY_CLIENT_SECRET'),
    ],
    'cred_afiliado' => [
        'url' => env('CRED_AFILIADO_URL'),
        'id' => env('CRED_AFILIADO_ID'),
        'offerid' => env('CRED_AFILIADO_OFFERID'),
        'mid' => env('CRED_AFILIADO_MID'),
    ],
    'cred_affiliate_itoo'=>[
        'url' => env('CRED_AFILIADO_ITOO_URL'),
        'offert_id' => env('CRED_AFILIADO_ITOO_COD'),
        'cod_affiliate' => env('CRED_AFILIADO_ITOO_ID'),
    ],
     'cred_affiliate_admitad'=>[
        'url' => env('CRED_AFILIADO_ADMITAD_URL'),
        'sub_id' => env('CRED_AFILIADO_ADMITAD_SUB_ID'),
        'url_udemy' => env('CRED_AFILIADO_URL_UDEMY'),
    ],

];
