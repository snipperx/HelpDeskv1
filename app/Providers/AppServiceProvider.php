<?php

namespace App\Providers;
use App\ThemeSettings;
use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
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
            $user = Auth::user();
            $themes = ThemeSettings::where('id', 1)->orderBy('id', 'desc')->get();

            $data['themes'] = $themes;

            $view->with($data);
        });
    }
}
