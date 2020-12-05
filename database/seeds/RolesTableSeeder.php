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
            'Permiso'=> 'Vista de Roles',
            'Slug'=> 'role.roles',

        ]);

        $permisos_all[]= $permiso->id;

        //table role_permisos
        $roladmin->permisos()->sync($permisos_all);



        //permiso_user
        $permisos_all= [];

        $permiso= Permiso::create([
            'Permiso'=> 'Vista de Roles',
            'Slug'=> 'role.roles',

        ]);

        $permisos_all[]= $permiso->id;

        //table role_permisos
        $useradmin->permisos()->sync($permisos_all);

       


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
