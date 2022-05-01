<?php

namespace App\Providers;
use App\Models\Cat;
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
        // view()->composer('front.inc.header', function($view) {
        //     $view->with('cats',Cat::select('id','name')->get());
        // });
        // View::composer('front.inc.header',function($view){
        //     $view->with('cats',Cat::select('id','name')->get());
        // });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front.inc.header', function($view){
            $view->with('cats',Cat::select('id','name')->get()); 
        }) ; 
    }
}
