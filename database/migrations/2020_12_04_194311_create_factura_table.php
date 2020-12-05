<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->increments('codigoF');
            $table->bigInteger('numero')->unsigned();
            $table->foreign('numero')  //Creación de la llave foranea
                  ->references('numero')  // Referencia al atributo
                  ->on('habitacion');  // De que tabla
            $table->bigInteger('cliente')->unsigned();
            $table->foreign('cliente')  //Creación de la llave foranea
                ->references('id')  // Referencia al atributo
                ->on('cliente');  // De que tabla
            $table->bigInteger('formaPago')->unsigned();
            $table->foreign('formaPago')  //Creación de la llave foranea
                    ->references('id')  // Referencia al atributo
                    ->on('formaPago');  // De que tabla
            $table->date('entrada'); 
            $table->date('salida'); 
            $table->double('total', 10, 2); 
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
        Schema::dropIfExists('factura');
    }
}
