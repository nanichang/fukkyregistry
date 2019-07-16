<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
class WishlistServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
     
    public function boot()
    {
        //
    }
    
    /**
     * Register the application services.
     *
     * @return void
     */
     
    public function register()
    {
        $this->app->bind('App\Repositories\Wishlist\WishlistContract',
            'App\Repositories\Wishlist\EloquentWishlistRepository');
    }
}
