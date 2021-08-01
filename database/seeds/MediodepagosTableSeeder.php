<?php

use Illuminate\Database\Seeder;
use App\Mediopago;

class MediodepagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mediopago=new Mediopago;
        $mediopago->nombre="Efectivo";
        $mediopago->save();


        $mediopago=new Mediopago;
        $mediopago->nombre="Cheque";
        $mediopago->save();

        $mediopago=new Mediopago;
        $mediopago->nombre="Tarjeta de Crédito";
        $mediopago->save();

        $mediopago=new Mediopago;
        $mediopago->nombre="Tarjeta de Débito";
        $mediopago->save();


        $mediopago=new Mediopago;
        $mediopago->nombre="Transferencia Electrónica";
        $mediopago->save();


        $mediopago=new Mediopago;
        $mediopago->nombre="Depósito Bancario";
        $mediopago->save();

        $mediopago=new Mediopago;
        $mediopago->nombre="Bono";
        $mediopago->save();
    }
}
