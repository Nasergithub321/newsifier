<?php

namespace App\Listeners;

use App\Events\ReservationEvent;
use App\Facades\UserService;
use App\Notifications\ReservationNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ReservationListener
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
     * @param ReservationEvent $event
     * @return void
     */
    public function handle(ReservationEvent $event)
    {
        $users = UserService::getList(['admin_type' => ['superadmin', 'admin']]);
        foreach ($users as $user) {
            $user->notify(New ReservationNotification($event->data));
        }
    }
}
