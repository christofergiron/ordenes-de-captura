<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenCapturaDelitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_capturas_delitos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_orden_captura');
            $table->integer('id_delito');
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
        Schema::dropIfExists('ordenes_capturas_delitos');
    }
}
