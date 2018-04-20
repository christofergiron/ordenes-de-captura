<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudContraOrden extends Model
{

  protected $table = "solicitudes_ordenes_capturas";

  public function solicitud()
  {
        return $this->morphOne(Solicitud::class, 'solicitable');
    }

  public function contra_orden()
   {
    return $this->hasOne(ContraOrdenCaptura::class, 'id_contra_orden');
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
