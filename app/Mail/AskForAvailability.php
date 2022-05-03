<?php


namespace App\Mail;


use Carbon\Carbon;
use Illuminate\Mail\Mailable;

class AskForAvailability extends Mailable
{
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
            ->subject(trans('app.site-title') . ' - ' . trans('notification.new-ask-for-availability') . ' - ' . Carbon::now())
            ->view('emails.user-ask-for-availability-notification')->with(['data' => $this->data]);
    }
}
