<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContraOrdenCapturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contra_ordenes_capturas', function (Blueprint $table) {
            $table->increments('id');
            //si no es solicitud ocuparia los datos que solicitud tiene
            $table->integer('id_orden');
            $table->string('estado');
            //porque se emite esta cosa
            $table->string('razon');
            $table->string('descripcion')->nullable();
            $table->boolean('deleted')->default(false);
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
        Schema::dropIfExists('contra_ordenes_capturas');
    }
}
