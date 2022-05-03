<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     * @return $this
     */
    public function build()
    {
        return $this
            ->from(config("mail.from")["address"], 'Tarrab')
            ->subject(trans('app.site-title') . ' - ' . trans('notification.contact-us') . ' - ' . Carbon::now())
            ->view('emails.contact-us')->with(['data' => $this->data]);
    }
}
