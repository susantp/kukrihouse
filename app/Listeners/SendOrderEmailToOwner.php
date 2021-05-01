<?php

namespace App\Listeners;

use App\Events\OrderSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendOrderEmailToOwner
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
     * @param OrderSaved $event
     * @return void
     */
    public function handle(OrderSaved $event)
    {

    }
}
