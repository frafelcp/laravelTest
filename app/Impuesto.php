<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impuesto extends Model
{
    protected $table = 'impuestos';

    protected $primaryKey = 'id';

    protected $filliable = ['porcentaje', 'descripcion', 'estado'];

    protected $guarded = ['id'];
}
