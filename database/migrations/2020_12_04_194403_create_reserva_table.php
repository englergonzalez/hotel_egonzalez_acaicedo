<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('numero')->unsigned();
            $table->foreign('numero')  //Creación de la llave foranea
                ->references('numero')  // Referencia al atributo
                ->on('habitacion');  // De que tabla
            $table->bigInteger('cliente')->unsigned();
            $table->foreign('cliente')  //Creación de la llave foranea
                    ->references('id')  // Referencia al atributo
                    ->on('cliente');  // De que tabla
            $table->date('entrada'); 
            $table->date('salida'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
