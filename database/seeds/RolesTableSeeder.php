<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=array(
            'Medico',
            'Administrador',
            'Secretario',
            );
    
            foreach($roles as $rol){
                DB::table('rols')->insert([
                    'nombreRol'=>$rol,
                ]);
    
            }
    }
}
