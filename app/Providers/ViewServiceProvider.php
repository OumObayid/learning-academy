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
        //envoyer les données de Cat et Setting au fichier header de front
        view()->composer('front.inc.header', function($view) {
            $view->with('cats',Cat::select('id','name')->get());
<<<<<<< HEAD
<<<<<<< HEAD
            $view->with('sett',Setting::first());
=======
            $view->with('sett',Setting::select('title','logo','favicon')->first());
        });
        view()->composer('admin.inc.header', function($view) {
            $view->with('sett',Setting::select('favicon')->first());
>>>>>>> 2eb76e9c125fdc417aff3bfa42350b9cdbaefd9d
=======
            $view->with('sett',Setting::first());
>>>>>>> 062c7782d90e8b76dfa14d4b65d928948ce0b064
        });

        //envoyer les données de Setting au fichier footer de front
        view()->composer('front.inc.footer', function($view) {
            $view->with('sett',Setting::first());
        });

       //envoyer les données de Setting au fichier footer de admin
        view()->composer('admin.inc.header', function($view) {
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
