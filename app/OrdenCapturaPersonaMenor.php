<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenCapturaPersonaMenor extends Model
{

protected $table = "ordenes_capturas_personas_menores";

  public function orden_captura()
  {
        return $this->belongsTo(OrdenCaptura::class, 'id_orden_captura');
    }

  public function persona_menor()
  {
        return $this->belongsTo(PersonaMenor::class, 'id_persona_menor');
    }
}
