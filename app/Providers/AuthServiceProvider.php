<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()

    {
         //Gate para admin
        Gate::define('isAdmin', function ($user) {
            return $user->roles->first()->slug == 'admin';
        });



//Gate
        Gate::define('issecretaria', function ($user) {
            return $user->roles->first()->slug == 'secretaria';
        });

        Gate::define('isOdontologo', function ($user) {
            return $user->roles->first()->slug == 'odontologo';
        });
        



        $this->registerPolicies();

        //
    }
}
