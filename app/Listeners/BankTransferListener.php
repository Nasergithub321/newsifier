<?php

namespace App\Listeners;

use App\Facades\UserService;
use App\Notifications\BankTransferNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BankTransferListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $users = UserService::getList(['admin_type' => ['superadmin', 'admin']]);
        foreach ($users as $user) {
            $user->notify(New BankTransferNotification($event));
        }
    }
}
