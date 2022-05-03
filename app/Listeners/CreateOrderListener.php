<?php

namespace App\Listeners;

use App\Events\CreateOrderEvent;
use App\Facades\UserService;
use App\Notifications\CreateOrderNotification;
use App\Notifications\GuestOrderNotification;
use App\Notifications\UserCreateOrderNotification;
use Illuminate\Support\Facades\Notification;

class CreateOrderListener
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
     * @param CreateOrderEvent $event
     * @return void
     */
    public function handle(CreateOrderEvent $event)
    {
        $users = UserService::getList(['admin_type' => ['superadmin', 'admin']]);

        foreach ($users as $user) {
            $user->notify(New CreateOrderNotification($event->order));
        }
        if (isset($event->order->user) && $event->order->user->hasRole('user')) {
            $event->order->user->notify(New UserCreateOrderNotification($event->order));
        } elseif (isset($event->order->user) && $event->order->user->hasRole('guest')) {
//            $event->order->user->notify(New GuestOrderNotification($event->order));
            Notification::route('mail', $event->order->contact_email)
                ->notify(new  GuestOrderNotification($event->order));
        }
    }
}
