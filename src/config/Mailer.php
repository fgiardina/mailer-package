<?php

return [
    'views_folder' => env('MAILER_VIEWS_FOLDER', 'vendor.mailer'),
    'send_route' => env('MAILER_SEND_ROUTE', '/mailer/sendemail'),
    'test_route' => env('MAILER_TEST_ROUTE', '/mailer/testemail'),
    'test_mail_form_enabled' => env('MAILER_TEST_MAIL_FORM_ENABLE', false),
];