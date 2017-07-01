<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = 'ingresos';

    protected $primaryKey = 'id';

    protected $filliable = [
    'tipo_comprobante',
    'numero_comprobante',
    'fecha_hora',
    'estado'
  ];

  protected $guarded = ['id'];
}
