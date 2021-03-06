<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SalesPriceChanged' => [
            'App\Listeners\SalesPriceChangedLog',
        ],
        'App\Events\PurchasePriceChanged' => [
            'App\Listeners\PurchasePriceChangedLog',
        ],
        'App\Events\StockAlert' => [
            'App\Listeners\SendStockLowerAlertNotification',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
