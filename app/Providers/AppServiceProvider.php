<?php

namespace App\Providers;
use App\Models\Message;
use App\Models\Product;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $mess_count = Message::where('viewed',0)->count();
        $ids = isset($_COOKIE['products']) ? json_decode($_COOKIE['products']) : [];
        $cartcount = count($ids);
        $appproducts = Product::whereIn('id', $ids)->get();
        $apptotal = Product::whereIn('id', $ids)->sum('price');

        $data = [
            'cookieids' => $ids,
            'apptotal' => $apptotal,
            'appproducts' => $appproducts,
            'mess_count' => $mess_count,
            'cartcount' => $cartcount
        ];
        view()->share($data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
