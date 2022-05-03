<?php


namespace App\Mail;


use Carbon\Carbon;
use Illuminate\Mail\Mailable;

class Application extends Mailable
{
    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $user;
    protected $application;

    public function __construct($user, $application)
    {
        $this->user = $user;
        $this->application = $application;
    }

    /**
     * Build the message.
     * @return $this
     */
    public function build()
    {
        return $this
            ->from(config("mail.from")["address"], 'Tarrab')
            ->subject(trans('all.site-title') . ' - ' . trans('notification.new-application') . ' - ' . Carbon::now())
            ->view('emails.user-application-notification')->with([
                'user' => $this->user,
                'application' => $this->application
            ]);
    }
}
