<?php
Route::group(['namespace' => 'Fgiardina\Mailer\Http\Controllers'], function () {
    Route::post(config('Mailer.send_route'), 'MailerController@sendemail')->name('fgiardina.mailer.sendemail');
    if (config('Mailer.test_mail_form_enabled')) {
        Route::get(config('Mailer.test_route'), 'MailerController@testEmail')->name('fgiardina.mailer.testemail');
    }
});