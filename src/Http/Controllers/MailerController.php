<?php

namespace Fgiardina\Mailer\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Fgiardina\Mailer\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class MailerController extends Controller
{
    public function sendemail(Request $request)
    {
        $data = $request->getContent();
        // $data = json_decode($data);

        if ($request->request) {
            $data = $request;
        }

        $email = Mail::to($data->to_email);
        if (isset($data->to_bcc_email)) {
            $email->bcc($data->to_bcc_email);
        }
        $email->send(new SendMail($data));

        return json_encode(['success'=>true]);

    }

    public function testEmail()
    {
        return view(config('Mailer.views_folder').".testform");
    }

}
