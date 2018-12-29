<?php

namespace Fgiardina\Mailer\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MailerController extends Controller
{
    public function sendemail(Request $request)
    {
        $data = $request->getContent();
        $data = json_decode($data);

        $email = Mail::to($data->to_email);
        if (isset($data->to_bcc_email)) {
            $email->bcc($data->to_bcc_email);
        }
        $email->send(new SendMail($data));

        return json_encode(['success'=>true]);
    
    }
}
