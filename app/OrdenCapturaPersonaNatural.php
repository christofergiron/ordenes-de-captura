<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenCapturaPersonaNatural extends Model
{

protected $table = "ordenes_capturas_personas_naturales";

  public function orden_captura()
  {
        return $this->belongsTo(OrdenCapturaPersona::class, 'id_orden_captura');
    }

  public function persona()
  {
        return $this->belongsTo(PersonaNatural::class, 'id_persona');
    }
}
