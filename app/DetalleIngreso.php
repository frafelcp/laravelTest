<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
  protected $table = 'detalle_ingresos';

  protected $primaryKey = 'id';

  protected $filliable = [
    'ingreso_id',
    'producto_id',
    'cantidad',
    'precio_compra',
    'precio_venta'
  ];

  protected $guarded = ['id'];
}
