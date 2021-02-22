<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permiso;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class RolesTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate
        DB::statement("SET foreign_key_checks= 0");

         DB::table('role_user')->truncate();
         DB::table('permiso_role')->truncate();
         DB::table('permiso_user')->truncate();
         Permiso::truncate();
         Role::truncate();
         User::truncate();

        DB::statement("SET foreign_key_checks= 1");

        //user  admin
        $useradmin=User::where("email","admin@admin.com")->first();
        if($useradmin){
          $useradmin-> delete();
        }
        $useradmin= User::create([
            'name'=> 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')

        ]);

    

  //creacion del Rol admin

        $roladmin= Role::create([
            'Nombre'=> 'Admin',
            'Slug'=> 'admin',

        ]);

        $useradmin->roles()->sync([$roladmin->id]);

        //permiso_role
        $permisos_all= [];

        $permiso= Permiso::create([
            'Permiso'=> 'Full-access',
            'Slug'=> 'role.roles',

        ]);

        $permisos_all[]= $permiso->id;

        //table role_permisos
        $roladmin->permisos()->sync($permisos_all);
        $useradmin->permisos()->sync($permisos_all);



      /*  //permiso_user
        $permisos_all= [];

        $permiso= Permiso::create([
            'Permiso'=> 'Vista de Roles',
            'Slug'=> 'role.roles',

        ]);

        $permisos_all[]= $permiso->id;

        //table role_permisos
        $useradmin->permisos()->sync($permisos_all); */

       //creacion del Rol Secretaria

       $rolesecretaria= Role::create([
        'Nombre'=> 'Secretaria',
        'Slug'=> 'secretaria',

    ]);


    //permisos-rol de secretaria

        $permiso= Permiso::create([
            'Permiso'=> 'Ver Citas',
            'Slug'=> 'citas.ver',

        ]);

        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);


        $permiso= Permiso::create([
            'Permiso'=> 'Agendar cita',
            'Slug'=> 'Agendar.citas',

        ]);

        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);



        $permiso= Permiso::create([
            'Permiso'=> 'ver citas diarias',
            'Slug'=> 'citas.diaria',

        ]);

        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'ver citas Semanales',
            'Slug'=> 'citas.semanales',

        ]);

        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'Ver Paciente',
            'Slug'=> 'Paciente.ver',

        ]);
        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);


      


        $permiso= Permiso::create([
            'Permiso'=> 'Crear Paciente',
            'Slug'=> 'Paciente.crear',

        ]);

        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'Editar Paciente',
            'Slug'=> 'Paciente.editar',

        ]);

        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'Borrar Paciente',
            'Slug'=> 'Paciente.borrar',

        ]);
        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'Descargar Pacientes',
            'Slug'=> 'Paciente.descargar',

        ]);
        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);


        $permiso= Permiso::create([
            'Permiso'=> 'ver Gastos',
            'Slug'=> 'Gastos.ver',

        ]);
        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'Agregar Gastos',
            'Slug'=> 'Gastos.Agregar',

        ]);
        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'Borrar Gastos',
            'Slug'=> 'Gastos.Borrar',

        ]);
        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'Editar Gastos',
            'Slug'=> 'Gastos.Editar',

        ]);
        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);


        $permiso= Permiso::create([
            'Permiso'=> 'Crear Odontologo',
            'Slug'=> 'Odontologo.crear',

        ]);
       $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'Editar Odontologo',
            'Slug'=> 'Odontologo.editar',

        ]);
        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'Crear Horario Odontologo',
            'Slug'=> 'Horario.crear',

        ]);
        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);


        $permiso= Permiso::create([
            'Permiso'=> 'Agregar Especialidad',
            'Slug'=> 'especialidad.agregar',

        ]);
        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);


        $permiso= Permiso::create([
            'Permiso'=> 'Eliminar Especialidad',
            'Slug'=> 'especialidad.eliminar',

        ]);
        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);
        
        $permiso= Permiso::create([
            'Permiso'=> 'Agregar Otra Especialidad al Odontologo',
            'Slug'=> 'especialidadOdontologo.crear',

        ]);
        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);


       

        $permiso= Permiso::create([
            'Permiso'=> 'Ver logotipo',
            'Slug'=> 'logotipo.ver',

        ]);
        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'Ver Inventario',
            'Slug'=> 'inventario.ver',

        ]);
        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'Agregar Inventario',
            'Slug'=> 'inventario.agregar',

        ]);

        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'Editar Inventario',
            'Slug'=> 'inventario.editar',

        ]);

        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'Borrar Inventario',
            'Slug'=> 'inventario.borrar',

        ]);

        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        $permiso= Permiso::create([
            'Permiso'=> 'Crear MediosdePago',
            'Slug'=> 'crear.mediosdepago',

        ]);

        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        
        $permiso= Permiso::create([
            'Permiso'=> 'Editar MediosdePago',
            'Slug'=> 'editar.mediosdepago',

        ]);

        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);

        
        $permiso= Permiso::create([
            'Permiso'=> 'Eliminar MediosdePago',
            'Slug'=> 'eliminar.mediosdepago',

        ]);

        $permisos_secretaria[]= $permiso->id;
        $rolesecretaria->permisos()->sync($permisos_secretaria);




        //CRear el ROl de Odontologo
    $roleodontologo= Role::create([
        'Nombre'=> 'Odontologo',
        'Slug'=> 'odontologo',

    ]);

    //permisos del Rol de Odontologo
    $permiso= Permiso::create([
        'Permiso'=> 'Ver Citas',
        'Slug'=> 'citas.ver',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Agenda Semanal',
        'Slug'=> 'agenda.semanal',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Agenda Diaria',
        'Slug'=> 'agenda.diaria',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Ver Paciente ',
        'Slug'=> 'ver.Paciente',

    ]);
    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo)
    ;
    $permiso= Permiso::create([
        'Permiso'=> 'Editar Paciente ',
        'Slug'=> 'Editar.Paciente',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Borrar Paciente ',
        'Slug'=> 'borrar.Paciente',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Descargar Paciente ',
        'Slug'=> 'descargar.Paciente',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);


    $permiso= Permiso::create([
        'Permiso'=> 'subir imagen al expediente paciente ',
        'Slug'=> 'Imagen.Paciente',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);


    $permiso= Permiso::create([
        'Permiso'=> 'Agregar Comentarios administrativos ',
        'Slug'=> 'comentarios.Paciente',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Cita Individual ',
        'Slug'=> 'cita.individual',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Ver plan de tratamiento ',
        'Slug'=> 'ver.plandetratamiento',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Crear plan de tratamiento ',
        'Slug'=> 'crear.plandetratamiento',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Borrar plan de tratamiento ',
        'Slug'=> 'borrar.plandetratamiento',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Ver Evolucion ',
        'Slug'=> 'ver.evolucion',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    
    $permiso= Permiso::create([
        'Permiso'=> 'Nueva Evolucion ',
        'Slug'=> 'crear.evolucion',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);


    $permiso= Permiso::create([
        'Permiso'=> 'Agregar Tratamiento',
        'Slug'=> 'agregar.tratamiento',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Editar Tratamiento',
        'Slug'=> 'editar.tratamiento',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Eliminar Tratamiento',
        'Slug'=> 'eliminar.tratamiento',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Agregar Producto ',
        'Slug'=> 'agregar.Producto',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Editar Producto ',
        'Slug'=> 'editar.Producto',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'Eliminar Producto ',
        'Slug'=> 'eliminar.Producto',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);


    $permiso= Permiso::create([
        'Permiso'=> 'Ver Inventario ',
        'Slug'=> 'ver.inventario',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    $permiso= Permiso::create([
        'Permiso'=> 'subir documentos clinicos ',
        'Slug'=> 'subir.documentos',

    ]);

    $permisos_odontologo[]= $permiso->id;
    $roleodontologo->permisos()->sync($permisos_odontologo);

    






      /*  $roles=array(
            'Medico',
            'Administrador',
            'Secretario',
            );

        

    
            foreach($roles as $rol){
                DB::table('roles')->insert([
                    'Nombre'=>$rol,
                    'slug'=>$rol,
                ]);
    
            }

            
    

            */
    }
}
