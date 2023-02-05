<?php

namespace App\Providers;

use App\Events\CommissionToRefersEvent;
use App\Events\EmailVerified;
use App\Events\TidRequestEvent;
use App\Events\UserParticipateEvent;
use App\Events\WhatsappMessageEvent;
use App\Events\WhatsappTextEvent;
use App\Listeners\AddCommissionToRefersListeners;
use App\Listeners\SendTidRequestNotification;
use App\Listeners\SendWhatsappMessageListner;
use App\Listeners\SendWhatsappTextListener;
use App\Listeners\UserEmailVerified;
use App\Listeners\UserParticipateListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
