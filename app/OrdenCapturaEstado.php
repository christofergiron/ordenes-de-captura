<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenCapturaEstado extends Model
{
//los estados son: vigente, cancelada por una contra orden o por la captura del sujeto
protected $table = "orden_captura_estados";

  public function orden_captura()
  {
        return $this->belongsTo(OrdenCaptura::class, 'id_orden_captura');
    }

  public function funcionarios()
  {
        return $this->belongsTo(Funcionario::class, 'id_funcionario');
    }
}
