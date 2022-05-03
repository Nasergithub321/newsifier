<?php

namespace App\Listeners;

use App\Constants\Constants;
use App\Events\ChangeOrderStatusEvent;
use App\Facades\UserService;
use App\Notifications\ChangeOrderStatusNotification;
use App\Notifications\ChangeRfqOrderStatusNotification;
use App\Notifications\GuestChangeOrderRfqStatusNotification;
use App\Notifications\GuestChangeOrderStatusNotification;
use App\Notifications\UserChangeOrderStatusNotification;
use App\Notifications\UserChangeRfqOrderStatusNotification;
use Illuminate\Support\Facades\Notification;

class ChangeOrderStatusListener
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
     * @param ChangeOrderStatusEvent $event
     * @return void
     */
    public function handle(ChangeOrderStatusEvent $event)
    {
        $array = [
            Constants::ORDER_STATUS[Constants::ORDER_DONE],
            Constants::ORDER_STATUS[Constants::ORDER_READY],
            Constants::ORDER_STATUS[Constants::ORDER_REJECTED],
            Constants::ORDER_STATUS[Constants::ORDER_ON_DELIVERY],
            Constants::ORDER_STATUS[Constants::ORDER_CANCELED],
            Constants::ORDER_STATUS[Constants::ORDER_IN_WAITING]
        ];

        if (in_array($event->order->status_id, $array)) {
            $users = UserService::getList(['admin_type' => ['superadmin', 'admin']]);
            if ($users->isNotEmpty()) {
                foreach ($users as $user) {
                    if ($event->order->status_id == Constants::ORDER_STATUS[Constants::ORDER_IN_WAITING] && $event->order->type == 'rfq') {
                        $user->notify(new ChangeRfqOrderStatusNotification($event->order, $user));
                    } else {
                        $user->notify(new ChangeOrderStatusNotification($event->order, $user));
                    }
                }
            }
            if ($event->order->user->hasRole('guest')) {
                if ($event->order->status_id == Constants::ORDER_STATUS[Constants::ORDER_IN_WAITING] && $event->order->type == 'rfq') {
                    $event->order->user->notify(new UserChangeRfqOrderStatusNotification($event->order, $event->order->user));
                } else {
                    Notification::route('mail', $event->order->contact_email)
                        ->notify(new GuestChangeOrderStatusNotification($event->order, $event->order->user));
                }
            } else {
                if ($event->order->status_id == Constants::ORDER_STATUS[Constants::ORDER_IN_WAITING] && $event->order->type == 'rfq') {
                    $event->order->user->notify(new UserChangeRfqOrderStatusNotification($event->order, $event->order->user));
                } else {
                    $event->order->user->notify(new UserChangeOrderStatusNotification($event->order, $event->order->user));
                }
            }
        }
    }
}
