<?php

namespace App\Providers;

use App\Models\Order;
use App\Models\Product;
use App\Observers\OrderObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $file = app_path('Helper.php');
        if (file_exists($file)) {
            require_once($file);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Order::observe(OrderObserver::class);
        \Illuminate\Support\Facades\View::composer('includes.upSellProducts', function ($view) {
            $view->with('upSellProducts', Product::all());
        });
    }
}
