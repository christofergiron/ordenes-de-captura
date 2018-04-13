<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudContraOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_contra_ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_dependencia');
            $table->DateTime('fecha_creacion');
            $table->string('asunto');
            $table->integer('id_persona_natural')->nullable();
            $table->integer('id_persona_juridica')->nullable();
            $table->LongText('objeto_citacion');
            $table->string('estado');
            $table->integer('id_lugar');
            //necesito tener algun otro campo para saber en que tabla busco este valor o que sea string
            $table->string('solicitado_por');//la persona que solicito la citacion
            $table->string('motivo');
            //no estoy muy seguro de este id citacion, puede ser un texto mejor
            $table->integer('id_lugar_citacion');
            $table->string('dia_citacion');
            $table->Date('fecha_citacion');
            $table->Time('hora_citacion');
            $table->string('prevencion');
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
        Schema::dropIfExists('solicitudes_contra_ordenes');
    }
}
