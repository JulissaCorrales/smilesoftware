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
        'App\Paciente' => 'App\Policies\PacientePolicy',
        'App\Cita' => 'App\Policies\CitaPolicy',
        'App\Gasto' => 'App\Policies\GastoPolicy',
        'App\Inventario' => 'App\Policies\InventarioPolicy',
        'App\Odontologo' => 'App\Policies\OdontologoPolicy',
        'App\Logotipo' => 'App\Policies\LogotipoPolicy',
        'App\Archivo' => 'App\Policies\ArchivoPolicy',
        'App\Comentario' => 'App\Policies\ComentarioPolicy',
        'App\Plantratamiento' => 'App\Policies\PlanTratamientoPolicy',
        'App\Evoluciones' => 'App\Policies\EvolucionesPolicy',
        'App\Documento' => 'App\Policies\DocumentoPolicy',
        'App\Tratamiento' => 'App\Policies\TratamientoPolicy',
        'App\Producto' => 'App\Policies\ProductoPolicy',
        'App\Mediopago' => 'App\Policies\MediosdepagoPolicy',
        'App\Especialidad' => 'App\Policies\EspecialidadPolicy',
        'App\EspecialidadOdontologos' => 'App\Policies\EspecialidadOdontologoPolicy',
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
        Gate::define('isSecretaria', function ($user) {
            return $user->roles->first()->slug == 'secretaria';
        });

        Gate::define('isOdontologo', function ($user) {
            return $user->roles->first()->slug == 'odontologo';
        });
        



        $this->registerPolicies();

        //
    }
}
