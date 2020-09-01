<?php

namespace Fgiardina\Mailer\facades;

use Illuminate\Http\Request;

class MailSender {

    public static function start($data)
    {
        $request = Request::create(config('Mailer.send_route'), 'POST', $data, [], [], [], [
            'Content-Type' => 'application/json'
        ]);

        $response = app()->handle($request);
        return  $response->getContent();
    }
}
