<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenCapturaEstado extends Model
{

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
