<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $clientes = [
            [
                'dni'=>'1009123123',
                'nombre'=>'Justin Bieber',
                'genero'=>'M',
                'domicilio'=>'B/ Los Angeles',
                'telefono'=>'3125664343',
                'foto'=>'justin_bieber.jpg'
            ],
            [
                'dni'=>'1087123009',
                'nombre'=>'Rafael Castillo',
                'genero'=>'M',
                'domicilio'=>'CLL Miami CS 101',
                'telefono'=>'3201231234',
                'foto'=>'de_la_ghetto.jpg'
            ],
            [
                'dni'=>'1081007969',
                'nombre'=>'Austin Santos',
                'genero'=>'M',
                'domicilio'=>'B/ Las Vegas, CS 1033',
                'telefono'=>'3002008051',
                'foto'=>'arcangel.jpg'
            ],
            [
                'dni'=>'1009100100',
                'nombre'=>'Camilo',
                'genero'=>'M',
                'domicilio'=>'Cuidadela',
                'telefono'=>'3135526871',
                'foto'=>'camilo.jpg'
            ],
            [
                'dni'=>'1009123123',
                'nombre'=>'Mia Khalifa',
                'genero'=>'F',
                'domicilio'=>'Torobajo',
                'telefono'=>'3112334141',
                'foto'=>'mia_khalifa.jpg'
            ],
            [
                'dni'=>'1010123649',
                'nombre'=>'Romeo Santos',
                'genero'=>'M',
                'domicilio'=>'B/ Iberia',
                'telefono'=>'3185288051',
                'foto'=>'romeo_santos.jpg'
            ]
        ];
        DB::table('cliente')->insert($clientes);
    }
}
