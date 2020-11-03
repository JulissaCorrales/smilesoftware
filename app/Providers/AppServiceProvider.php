<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
// use App\Logotipo;

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
        //para pasar el logotipo a todas las vistas
        
        // $logotipos=Logotipo::where('id','=',1)->get();
        // View::share('logotipos',$logotipos);
    }
}
