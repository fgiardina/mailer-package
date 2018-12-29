<?php
Route::group(['namespace' => 'Fgiardina\Mailer\Http\Controllers'], function () {
    Route::post('/mailer/sendemail', 'MailerController@sendemail')->name('fgiardina.mailer.sendemail');
});