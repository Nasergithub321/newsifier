<?php

namespace App\Listeners;

use App\Notifications\AdsNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AdsListener
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
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        $users = UserService::getList(['admin_type' => ['user']]);
        foreach ($users as $user) {
            $user->notify(New AdsNotification($event, $user));
        }
    }
}
