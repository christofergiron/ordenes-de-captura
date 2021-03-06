<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenCapturaVehiculo extends Model
{

  protected $table = "ordenes_capturas_vehiculos";

  public function orden()
  {
      return $this->morphOne(OrdenCaptura::class, 'ordenable');
    }

    public function vehiculo()
    {
        return $this->hasMany(OrdenCapturaXVehiculo::class, "id_orden_captura");
    }
}
