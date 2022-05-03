<?php

namespace App\Listeners;

use App\Events\CreateUserEvent;
use App\Facades\Notification\NotificationService;
use App\Facades\Notification\NotificationTranslationService;
use App\Facades\UserNotificationService;
use App\Facades\UserService;
use App\Models\Notification;
use App\Models\NotificationTranslation;
use App\Models\UserNotification;
use App\Notifications\CreateUserNotification;
use App\Constants\Constants;;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\New_;

class CreateUser implements ShouldQueue
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
     * @param CreateUserEvent $event
     * @return void
     */
    public function handle(CreateUserEvent $event)
    {

        $users = UserService::getList(['admin_type' => ['superadmin', 'admin']]);
        foreach ($users as $user) {
            //if($user->id !=  Auth::id())
                $user->notify(New CreateUserNotification($user , $event->user));
        }
    }
}
