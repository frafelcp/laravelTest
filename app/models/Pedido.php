<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'numero_pedido',
        'dia_transaccion',
        'cliente_id',
        'total',
        'estado',
    ];
}
