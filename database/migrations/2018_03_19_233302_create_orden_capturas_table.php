<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenCapturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_capturas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ordenable_type')->nullable();
            $table->integer('ordenable_id')->nullable();
            $table->DateTime('fecha_creacion');
            $table->integer('id_expediente');
            $table->integer('id_juez')->nullable();
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
        Schema::dropIfExists('ordenes_capturas');
    }
}
