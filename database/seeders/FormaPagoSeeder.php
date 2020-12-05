<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pago = [
            [
                'descripcion'=>'Tarjeta de credito'
            ],
            [
                'descripcion'=>'Tarjeta de debito, PSE...'
            ],
            [
                'descripcion'=>'Efectivo'
            ]
        ];
        DB::table('formaPago')->insert($pago);
    }
}
