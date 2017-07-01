<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marca extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function productos()
    {
      return $this->hasMany('App\models\Producto','marca_id','id');
    }
}
