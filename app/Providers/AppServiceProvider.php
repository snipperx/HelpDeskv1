<?php

namespace App\Providers;
use App\ThemeSettings;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;


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
        view()->composer('Back.layouts.app', function ($view) {

            $themes = ThemeSettings::where('id', 1)->orderBy('id', 'desc')->first();
            $data['themes'] = $themes;
            $view->with($data);
        });
    }
}
