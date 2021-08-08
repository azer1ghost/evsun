<?php

namespace App\Providers;

use App\Models\Social;
use Illuminate\Support\ServiceProvider;
use Schema;

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
        if (Schema::hasTable('socials')) {
            view()->share('socials', Social::active()->orderBy('ordering')->get() ?? collect());
        }
    }
}
