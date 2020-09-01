<?php

namespace Fgiardina\Mailer\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->from(config('mail.from.address'), config('mail.from.name'))
            ->subject($this->data->subject)
            ->view(config('Mailer.views_folder') . '.' . $this->data->template)
            ->with('data', $this->data);

        if (isset($this->data->attach)) {
            $email->attach(storage_path("app/attach".$this->data->attach['path']), [
                'as' => $this->data->attach['filename'],
                'mime' => $this->data->attach['mime_type'], // https://developer.mozilla.org/es/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Lista_completa_de_tipos_MIME
            ]);
        }

        return $email;
    }
}
