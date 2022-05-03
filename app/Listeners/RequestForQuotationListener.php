<?php

namespace App\Listeners;

use App\Events\RequestForQuotationEvent;
use App\Facades\UserService;
use App\Notifications\RequestForQuotationNotification;
use App\Notifications\UserRequestForQuotationNotification;

class RequestForQuotationListener
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
     * @param RequestForQuotationEvent $event
     * @return void
     */
    public function handle(RequestForQuotationEvent $event)
    {

        $users = UserService::getList(['admin_type' => ['superadmin', 'admin']]);
        foreach ($users as $user) {
            $user->notify(New RequestForQuotationNotification($event->quotation , $user));
        }

        if (isset($event->quotation)) {
            $event->quotation->user->notify(New UserRequestForQuotationNotification($event->quotation));
        }
    }
}
