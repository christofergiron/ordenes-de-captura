<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenCapturaDelito extends Model
{

protected $table = "ordenes_capturas_delitos";

  public function orden_captura()
  {
        return $this->belongsTo(OrdenCaptura::class, 'id_orden_captura');
    }

  public function delitos()
  {
        return $this->belongsTo(Delito::class, 'id_delito');
    }
}
