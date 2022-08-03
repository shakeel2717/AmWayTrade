<?php

namespace App\Listeners;

use App\Events\PlanCommissionEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PlanCommissionListener
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
     * @param  \App\Events\PlanCommissionEvent  $event
     * @return void
     */
    public function handle(PlanCommissionEvent $event)
    {
        info("Event Triggered");
    }
}
