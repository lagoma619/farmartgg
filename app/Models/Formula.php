<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Formula extends Model
{
    //use HasFactory;
protected $fillable = [
        'form_numero_id',
        'form_cliente_id',
        'form_fecha',
        'form_tipo_facturacion',
        'form_user_id',
        'form_observacion',
        'form_estado',
];

public function clientes(): BelongsTo
{
    return $this->belongsTo(Cliente::class, 'id', 'form_cliente_id');
}

public function productos(): HasMany
{
    return $this->hasMany(Producto::class);
}

}
