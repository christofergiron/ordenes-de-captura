<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenCapturaXVehiculo extends Model
{

protected $table = "ordenes_capturas_x_vehiculos";

  public function orden_captura()
  {
        return $this->belongsTo(OrdenCaptura::class, 'id_orden_captura');
    }

  public function vehiculo()
  {
        return $this->belongsTo(Vehiculo::class, 'id_vehiculo');
    }
}
