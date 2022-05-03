<?php

namespace App\Listeners;

use App\Events\ApplicationEvent;
use App\Facades\UserService;
use App\Notifications\ApplicationNotification;
use App\Notifications\UserApplicationNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ApplicationListener
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
     * @param ApplicationEvent $event
     * @return void
     */
    public function handle(ApplicationEvent $event)
    {

        $users = UserService::getList(['admin_type' => ['superadmin', 'admin']]);
        foreach ($users as $user) {
            $user->notify(New ApplicationNotification($event->application , $user));
        }

        if (isset($event->application)) {
            $event->application->user->notify(New UserApplicationNotification($event->application));
        }
    }
}
