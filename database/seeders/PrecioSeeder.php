<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PrecioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $precios = [
            [
                'tipo'=>'Sencilla',
                'precio'=> 299000,
            ],
            [
                'tipo'=>'Doble',
                'precio'=> 599000,
            ],
            [
                'tipo'=>'Matrimonio',
                'precio'=> 899000,
            ],
            [
                'tipo'=>'Suite Jr',
                'precio'=> 799000,
            ],
            [
                'tipo'=>'Suite',
                'precio'=> 1299000,
            ],
            [
                'tipo'=>'Familiar',
                'precio'=> 1999000,
            ]
        ];
        DB::table('precio')->insert($precios);
    }
}
