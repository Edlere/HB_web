<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contactos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('contactos', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nombre');
        $table->string('correo')->unique();
        $table->string('telefono',9);
        //campo "mensaje"(tipo text)añadido a manualmente
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
        //
    }
}
