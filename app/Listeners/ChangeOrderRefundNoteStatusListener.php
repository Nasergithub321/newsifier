<?php

namespace App\Listeners;

use App\Events\ChangeOrderRefundNoteStatusEvent;
use App\Facades\UserService;
use App\Notifications\ChangeOrderRefundNoteStatusNotification;
use App\Notifications\UserChangeOrderRefundNoteStatusNotification;
use App\Constants\Constants;

class ChangeOrderRefundNoteStatusListener
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
     * @param ChangeOrderRefundNoteStatusEvent $event
     * @return void
     */
    public function handle(ChangeOrderRefundNoteStatusEvent $event)
    {
        $array = [
            Constants::ORDER_REFUND_NOTE_STATUS[Constants::ORDER_REFUND_NOTE_ACCEPTED],
            Constants::ORDER_REFUND_NOTE_STATUS[Constants::ORDER_REFUND_NOTE_REJECTED]
        ];

        if (in_array($event->order_note->status, $array)) {
            $users = UserService::getList(['admin_type' => ['superadmin', 'admin', 'branchadmin','casher']]);
            if ($users->isNotEmpty()) {
                foreach ($users as $user) {
                    if ($user->hasRole('branchadmin') && in_array($event->order->branch->id, $user->branches->keyBy('branch_id')->keys()->toArray())) {
                        $user->notify(new ChangeOrderRefundNoteStatusNotification($event->order,$event->order_note, $user));
                    }elseif(!$user->hasRole('branchadmin')){
                        $user->notify(new ChangeOrderRefundNoteStatusNotification($event->order,$event->order_note, $user));
                    }
                }
            }
                $event->order->user->notify(new UserChangeOrderRefundNoteStatusNotification($event->order,$event->order_note, $event->order->user));

        }
    }
}
