<?php

namespace App\Listeners;

use App\Events\RegisterEvent;
use App\Facades\UserService;
use App\Notifications\RegisterNotification;
use App\Notifications\UserRegisterNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RegisterListener
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
     * @param  RegisterEvent  $event
     * @return void
     */
    public function handle(RegisterEvent $event)
    {
        $users = UserService::getList(['admin_type' => ['superadmin', 'admin']]);
        foreach ($users as $user) {
            $user->notify(New RegisterNotification($user, $event->user));
        }
        $event->user->notify(new UserRegisterNotification($event->user));
    }
}
