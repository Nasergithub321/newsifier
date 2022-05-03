<?php

namespace App\Listeners;


use App\Events\CreateOutsideOrderEvent;
use App\Facades\UserService;
use App\Notifications\CreateOrderNotification;
use App\Notifications\CreateOutsideOrderNotification;
use App\Notifications\GuestOrderNotification;
use App\Notifications\UserCreateOrderNotification;
use Illuminate\Support\Facades\Notification;

class CreateOutsideOrderListener
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
     * @param CreateOutsideOrderEvent $event
     * @return void
     */
    public function handle(CreateOutsideOrderEvent $event)
    {
        $users = UserService::getList(['admin_type' => ['superadmin', 'admin']]);

        foreach ($users as $user) {
            $user->notify(new CreateOrderNotification($event->order));
        }
        $event->order->user->notify(new CreateOutsideOrderNotification($event->order));
    }
}
