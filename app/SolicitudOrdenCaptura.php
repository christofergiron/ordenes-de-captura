<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudOrdenCaptura extends Model
{

protected $table = "solicitudes_contra_ordenes";

  public function solicitud()
  {
        return $this->morphOne(Solicitud::class, 'solicitable');
    }

    public function orden_captura()
    {
          return $this->hasOne(OrdenCaptura::class, 'id_orden_captura');
      }

      public function juez()
       {
        return $this->hasOne(Juez::class, 'id_juez');
          }

      public function fiscal()
        {
        return $this->hasOne(Juez::class, 'id_fiscal');
          }
}
