<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;


    public function definition(): array
    {

        return [
            'prod_nombre' => $this->faker->unique()->safeColorName(),
            'prod_lote' => Str::random(8),
            'prod_fecha_vencimiento' => $this->faker->dateTimeBetween('1 years','3 years'),
            'prod_precio' => $this->faker->randomNumber(6),
            'prod_estado' => $this->faker->randomElement(['Activo'])
        ];
    }
}
