<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HabitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $habitaciones = [
            [
                'descripcion'=> 'Cama sencilla, aire acondicionado...',
                'numCamas'=>1,
                'foto'=>'1.jpg',
                'precio_id'=>7
            ],
            [
                'descripcion'=> 'Cama Matrimonial, SmartTv, Aire...',
                'numCamas'=>2,
                'foto'=>'2.jpg',
                'precio_id'=>9
            ],
            [
                'descripcion'=> 'Cama Doble',
                'numCamas'=>2,
                'foto'=>'3.jpg',
                'precio_id'=>8
            ],
            [
                'descripcion'=> 'Suite Junior, cama doble, SmartTv, Aire...',
                'numCamas'=>1,
                'foto'=>'4.jpg',
                'precio_id'=>10
            ],
            [
                'descripcion'=> 'Suite, cama king, vista al mar, SmartTv, Aire...',
                'numCamas'=>1,
                'foto'=>'5.jpg',
                'precio_id'=>11
            ],
            [
                'descripcion'=> 'Familiar, 5 camas sencillas, aire...',
                'numCamas'=>5,
                'foto'=>'6.jpg',
                'precio_id'=>12
            ]
        ];
        DB::table('habitacion')->insert($habitaciones);
    }
}
