<?php

namespace App\Listeners;

use App\Events\RefundOrderRequestEvent;
use App\Facades\UserService;
use App\Notifications\RefundOrderRequestNotification;

class RefundOrderRequestListener
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
     * @param RefundOrderRequestEvent $event
     * @return void
     */
    public function handle(RefundOrderRequestEvent $event)
    {
        $users = UserService::getList(['admin_type' => ['superadmin', 'admin']]);
        foreach ($users as $user) {
            $user->notify(new RefundOrderRequestNotification($event->order, $user));
        }
    }
}
