<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContraOrdenCaptura extends Model

{
  protected $table = "contra_ordenes_capturas";
//si no es una solicitud, herencia de documento
// y si es herencia de documento relacion con los usuarios
public function solicitud()
{
      return $this->morphOne(Solicitud::class, 'solicitable');
  }

public function orden_captura()
{
      return $this->hasOne(OrdenCaptura::class, 'id_orden');
  }
//si la contra orden lleva estados no se si necesitare la tabla n a n
}
