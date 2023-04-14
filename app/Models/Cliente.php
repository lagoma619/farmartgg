<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'clie_nombre',
        'clie_eps',
        'clie_email',
        'clie_direccion',
        'clie_ciudad',
        'clie_telefono',
        'clie_tipo_id',
        'clie_numero_id',
        'clie_estado',
    ];

    public function formulas(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Formula::class, $foreignKey = 'form_cliente_id', $localKey = 'id');
    }
    public function facturas(): HasMany
    {
        return $this->hasMany(Factura::class);
    }
}
