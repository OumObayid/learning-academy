<?php

namespace App\Providers;
use App\Models\Cat;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //envoyer les données de Cat et Setting au fichier header
        view()->composer('front.inc.header', function($view) {
            $view->with('cats',Cat::select('id','name')->get());
            $view->with('sett',Setting::first());
        });

        //envoyer les données de Setting au fichier footer
        view()->composer('front.inc.footer', function($view) {
            $view->with('sett',Setting::first());
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
