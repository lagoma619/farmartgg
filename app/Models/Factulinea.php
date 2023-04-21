<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Factulinea extends Model
{
    //use HasFactory;
    protected $fillable = [
        'factlinea_fecha',
        'factlinea_formulaid',
        'factlinea_productoid',
        'factlinea_productocantidad',
        'factlinea_productoprecio',
        'fact_facturaid',
    ];

    public function formulas(): HasMany
    {
        return $this->hasMany(Formula::class,'id','fact_formulaid');
    }

    public function productos(): HasMany
    {
        return $this->hasMany(Producto::class,'id','fact_productoid');
    }
}
