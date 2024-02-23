<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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

        Filament::registerNavigationGroups([
            'People',
            'Sales',
            'Others',
        ]);

        Gate::define('use-translation-manager', function (?User $user) {
            // Your authorization logic
            return $user !== null && $user->email === 'admin@tinycrm.com';
        });
        
    }
}
