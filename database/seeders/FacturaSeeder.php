<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $facturas = [
            [
                'numero'=>3,
                'cliente'=> 19,
                'formaPago'=>1,
                'entrada'=>'2020/12/04',
                'salida'=>'2020/12/05',
                'total'=>9298000
            ],
            [
                'numero'=>6,
                'cliente'=> 20,
                'formaPago'=>2,
                'entrada'=>'2020/12/14',
                'salida'=>'2020/12/15',
                'total'=>3800000
            ],
            [
                'numero'=>5,
                'cliente'=> 21,
                'formaPago'=>1,
                'entrada'=>'2020/12/13',
                'salida'=>'2020/12/15',
                'total'=>1299000
            ],
            [
                'numero'=>4,
                'cliente'=> 22,
                'formaPago'=>1,
                'entrada'=>'2020/12/09',
                'salida'=>'2020/12/11',
                'total'=>2999000
            ],
            [
                'numero'=>1,
                'cliente'=> 23,
                'formaPago'=>3,
                'entrada'=>'2020/12/04',
                'salida'=>'2020/12/09',
                'total'=>6999000
            ],
            [
                'numero'=>2,
                'cliente'=> 24,
                'formaPago'=>1,
                'entrada'=>'2020/12/09',
                'salida'=>'2020/12/10',
                'total'=>2566000
            ],
            [
                'numero'=>4,
                'cliente'=> 23,
                'formaPago'=>1,
                'entrada'=>'2020/11/12',
                'salida'=>'2020/11/19',
                'total'=>6879000
            ]
        ];
        DB::table('factura')->insert($facturas);
    }
}
