<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Factura extends Model
{
    //use HasFactory;
    protected $fillable = [
        'fact_formulaid',
        'fact_productoid'
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
