<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $table = 'productos';

  protected $primaryKey = 'id';

  protected $filliable = [
    'codigo',
    'nombre',
    'stock',
    'descripcion',
    'estado'

  ];

  protected $guarded = ['id'];
}
