<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(PacientesTableSeeder::class);
        $this->call(OdontologosTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        //$this->call(MediodepagosTableSeeder::class);
       // $this->call(TratamientosTableSeeder::class);
      //  $this->call(ProductosTableSeeder::class);
    }
}
