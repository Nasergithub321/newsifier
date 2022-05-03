<?php

namespace App\Listeners;

use App\Events\UpdateItemEvent;
use App\Facades\UserService;
use App\Notifications\ApplicationNotification;
use App\Notifications\UpdateItemNotification;
use App\Notifications\UserApplicationNotification;

class UpdateItemListener
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
     * @param UpdateItemEvent $event
     * @return void
     */
    public function handle(UpdateItemEvent $event)
    {
        foreach ($event->item->itemFavorite as $favorite) {
            $user = $favorite->user;
            $user->notify(New UpdateItemNotification($event->item , $user));
        }
    }
}
