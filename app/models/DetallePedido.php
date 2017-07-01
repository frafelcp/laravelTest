<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetallePedido extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'pedido_id',
        'producto_id',
        'cantidad',
        'precio',
        'subtotal',
    ];
}
