<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\RegisterEvent' => [
            'App\Listeners\RegisterListener',
        ],
        'App\Events\ApplicationEvent' => [
            'App\Listeners\ApplicationListener',
        ],
        'App\Events\ContactUsEvent' => [
            'App\Listeners\ContactUsListener',
        ],
        'App\Events\DeleteUserEvent' => [
            'App\Listeners\DeleteUser',
        ],
        'App\Events\RequestForQuotationEvent' => [
            'App\Listeners\RequestForQuotationListener',
        ],
        'App\Events\UpdateItemEvent' => [
            'App\Listeners\UpdateItemListener',
        ],
        'App\Events\NewsLetterEvent' => [
            'App\Listeners\NewsLetterListener',
        ],
        'App\Events\CreateOrderEvent' => [
            'App\Listeners\CreateOrderListener',
        ],
        'App\Events\ChangeOrderStatusEvent' => [
            'App\Listeners\ChangeOrderStatusListener',
        ],
        'App\Events\BankTransferEvent' => [
            'App\Listeners\BankTransferListener',
        ],
        'App\Events\CreateOutsideOrderEvent' => [
            'App\Listeners\CreateOutsideOrderListener',
        ],
        'App\Events\AskForAvailabilityEvent' => [
            'App\Listeners\AskForAvailabilityListener',
        ],
        'App\Events\RefundOrderRequestEvent' => [
            'App\Listeners\RefundOrderRequestListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
//        parent::boot();
    }
}
