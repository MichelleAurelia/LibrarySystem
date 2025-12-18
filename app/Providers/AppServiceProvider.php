<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $userId = session('user_id');
            $user = $userId ? User::find($userId) : null;

            $view->with('user', $user);
        });
        
        if (app()->environment('production')) {
        URL::forceScheme('https');
    }
    }
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
