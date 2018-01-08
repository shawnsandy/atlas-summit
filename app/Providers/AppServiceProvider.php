<?php

namespace App\Providers;

use App\Workshop;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        $this->current_user();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Way\Generators\GeneratorsServiceProvider::class);
            $this->app->register(\Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class);
        }
    }

    public function current_user()
    {
        view()->composer([
            '*'
        ], function ($view) {
            $user = Auth::user();
            view()->share('current_user', $user);
        });

        view()->composer(['page::index'], function () {
            $workshops = Workshop::orderBy('date', 'ASC')->get();
            view()->share('workshops', $workshops);
        });
    }
}
