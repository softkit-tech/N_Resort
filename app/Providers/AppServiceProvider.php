<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\HotalImage;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        
        $productimage =HotalImage::orderBy('id','DESC')
        ->get();
        view()->share(compact('productimage'));
    }
}
