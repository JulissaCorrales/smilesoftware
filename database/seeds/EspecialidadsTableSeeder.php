<?php

use Illuminate\Database\Seeder;

class EspecialidadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Especialidad::class,50)->create();
    }
}
