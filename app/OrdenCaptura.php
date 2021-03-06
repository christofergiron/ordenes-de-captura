<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenCaptura extends Model
{

protected $table = "ordenes_capturas";

  public function ordenable()
  {
        return $this->morphTo();
    }

  public function documento()
  {
    return $this->morphOne(Documento::class, 'tipoable');
    }

  public function expediente()
  {
        return $this->belongsTo(Expediente::class, 'id_expediente');
    }

  public function juez()
  {
      return $this->belongsTo(Juez::class, 'id_juez');
    }

  public function delitos()
  {
        return $this->HasMany(OrdenCapturaDelito::class, 'id_orden_captura');
    }

  public function estados()
  {
        return $this->HasMany(OrdenCapturaEstado::class, 'id_orden_captura');
    }

}
