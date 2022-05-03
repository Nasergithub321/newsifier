<?php

namespace App\Listeners;

use App\Events\NewsLetterEvent;
use App\Facades\UserService;
use App\Notifications\NewsLetterNotification;
use App\Notifications\UserNewsLetterNotification;
use Illuminate\Support\Facades\Notification;

class NewsLetterListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param NewsLetterEvent $event
     * @return void
     */
    public function handle(NewsLetterEvent $event)
    {

        $users = UserService::getList(['admin_type' => ['superadmin', 'admin']]);
        foreach ($users as $user) {
            $user->notify(New NewsLetterNotification($event->newsletter , $user));
        }
        Notification::route('mail', $event->newsletter->email)
            ->notify(new UserNewsLetterNotification($event->newsletter));
    }
}
