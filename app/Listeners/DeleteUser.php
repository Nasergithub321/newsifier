<?php

namespace App\Listeners;

use App\Events\DeleteUserEvent;
use App\Facades\UserService;
use App\Notifications\CreateUserNotification;
use App\Notifications\DeleteUserNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DeleteUser implements ShouldQueue
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
     * @param DeleteUserEvent $event
     * @return void
     */

    public function handle(DeleteUserEvent $event)
    {
        $users = UserService::getList(['admin_type' => ['superadmin', 'admin']]);
        foreach ($users as $user) {
            $user->notify(New DeleteUserNotification($user,$event->user));
        }
    }
}
