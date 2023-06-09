<?php

namespace App\Providers;

use App\Events\LoginEvent;
use App\Listeners\LoginEventListener;
use App\Events\AuditEvent;
use App\Listeners\AuditEventListener;
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
        /* Registered::class => [
            SendEmailVerificationNotification::class,
        ], */

        LoginEvent::class => [
            LoginEventListener::class,
        ],

        AuditEvent::class => [
            AuditEventListener::class,
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

	/**
	 * The event to listener mappings for the application.
	 * 
	 * @return array<class-string, array<int, class-string>>
	 */
	public function getListen() {
		return $this->listen;
	}
	
	/**
	 * The event to listener mappings for the application.
	 * 
	 * @param array<class-string, array<int, class-string>> $listen The event to listener mappings for the application.
	 * @return self
	 */
	public function setListen($listen): self {
		$this->listen = $listen;
		return $this;
	}
}
