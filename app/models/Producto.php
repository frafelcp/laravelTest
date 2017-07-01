<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'producto_codigo',
        'producto_nombre',
        'descripcion',
        'price',
        'marca_id',
        'categoria_id',
    ];

    public function marca()
    {
        return $this->belongsTo('App\Models\Marca','marca_id');
    }

    public function categoria()
   {
       return $this->belongsTo('App\Models\Categoria','categoria_id');
   }
}
