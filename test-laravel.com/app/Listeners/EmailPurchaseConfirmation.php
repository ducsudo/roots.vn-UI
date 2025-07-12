<?php

namespace App\Listeners;

use App\Events\PodcastWasPurchased;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EmailPurchaseConfirmation
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PodcastWasPurchased $event): void
    {
        //
    }
}
