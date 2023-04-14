<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'prod_nombre',
        'prod_precio',
        'prod_lote',
        'prod_fecha_vencimiento',
        'prod_estado'
    ];

}
