<?php

use Illuminate\Database\Seeder;
use App\Producto;
class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto=new Producto;
        $producto->nombre="Diagnostico";
        $producto->permitedescuento="No";
        $producto->monto="500";
        $producto->tratamiento_id="1";
        $producto->save(); 

        $producto=new Producto;
        $producto->nombre="Limpieza dia de la Madres";
        $producto->permitedescuento="No";
        $producto->monto="1500";
        $producto->tratamiento_id="1";
        $producto->save(); 

        $producto=new Producto;
        $producto->nombre="Destartaje";
        $producto->permitedescuento="No";
        $producto->monto="3000";
        $producto->tratamiento_id="1";
        $producto->save(); 



    }
}
