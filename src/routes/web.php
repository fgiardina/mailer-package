<?php
Route::group(['namespace' => 'Fgiardina\Mailer\Http\Controllers'], function () {
    Route::post(config('Mailer.send_route'), 'MailerController@sendemail')->name('fgiardina.mailer.sendemail');
    Route::get(config('Mailer.test_route'), 'MailerController@testEmail')->name('fgiardina.mailer.testemail');
});