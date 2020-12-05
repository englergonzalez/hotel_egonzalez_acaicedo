<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacion', function (Blueprint $table) {
            $table->bigIncrements('numero');
            $table->string('descripcion',255); 
            $table->integer('numCamas'); 
            $table->string('foto',255);
            $table->bigInteger('precio_id')->unsigned();
            $table->foreign('precio_id')  //Creación de la llave foranea
                  ->references('id')  // Referencia al atributo
                  ->on('precio');  // De que tabla
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
        Schema::dropIfExists('habitacion');
    }
}
