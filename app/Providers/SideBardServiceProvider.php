<?php

namespace App\Providers;
use App\ThemeSettings;
use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class SideBardServiceProvider extends ServiceProvider
{
     /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //Compose left sidebar
        view()->composer('Back.layouts.app', function ($view) {
            $user = Auth::user();
            $theme = ThemeSettings::where('id', 2)->get();
            $one = 'theme';

            dd($theme);
            $data['theme'] = $theme;
            $data['one'] = $one;
            $view->with($data);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


}
