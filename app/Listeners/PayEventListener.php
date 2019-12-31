<?php

namespace App\Listeners;

use App\Events\PayEvent;

class PayEventListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param PayEvent $event
     */
    public function handle(PayEvent $event)
    {
        $order = $event->order;
        // ...支付后的一些业务逻辑
    }
}
