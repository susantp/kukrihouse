<?php

namespace App\Observers;

use App\Mail\OrderSaved;
use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class OrderObserver
{
    public $afterCommit = true;
    /**
     * Handle the Order "created" event.
     *
     * @param Order $order
     * @return void
     */
    public function created(Order $order)
    {
        Log::info('Observed ...............s');
        Mail::to('sales@egkukrihouse.com')->send(new OrderSaved($order));
    }

    /**
     * Handle the Order "updated" event.
     *
     * @param Order $order
     * @return void
     */
    public function updated(Order $order)
    {
        //
    }

    /**
     * Handle the Order "deleted" event.
     *
     * @param Order $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     *
     * @param Order $order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    /**
     * Handle the Order "force deleted" event.
     *
     * @param Order $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }
}
