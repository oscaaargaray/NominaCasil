<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'client_id'         => env('PAYPAL_SANDBOX_CLIENT_ID', 'oscarfabian-10_api1.outlook.com'), // Aquí cambia el valor por la clave de cliente de sandbox
        'client_secret'     => env('PAYPAL_SANDBOX_CLIENT_SECRET', 'FPH7NXHS5HVBUQGN'), // Aquí cambia el valor por la clave secreta de sandbox
        'app_id'            => 'APP-80W284485P519543T', // Puedes dejar esto como está si no estás usando la aplicación específica
    ],
    'live' => [
        'client_id'         => env('PAYPAL_LIVE_CLIENT_ID', 'oscarfabian-10_api1.outlook.com'), // Aquí cambia el valor por el ID de cliente en vivo
        'client_secret'     => env('PAYPAL_LIVE_CLIENT_SECRET', 'FPH7NXHS5HVBUQGN'), // Aquí cambia el valor por la clave secreta en vivo
        'app_id'            => env('PAYPAL_LIVE_APP_ID', ''), // Aquí cambia el valor por el ID de la aplicación en vivo si es necesario
    ],

    'payment_action' => env('PAYPAL_PAYMENT_ACTION', 'Sale'), // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'notify_url'     => env('PAYPAL_NOTIFY_URL', ''), // Cambia esto según sea necesario para tu aplicación.
    'locale'         => env('PAYPAL_LOCALE', 'en_US'), // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => env('PAYPAL_VALIDATE_SSL', true), // Validate SSL when creating api client.
];
