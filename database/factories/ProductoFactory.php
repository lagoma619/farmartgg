<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;


    public function definition(): array
    {

        return [
            'prod_nombre' => $this->faker->company(),
            'prod_lote' => $this->faker->randomAscii(),
            'prod_fecha_vencimiento' => $this->faker->dateTimeBetween('-1 years','2 years'),
            'prod_precio' => $this->faker->randomNumber(8),
            'prod_estado' => $this->faker->randomElement(['Activo', 'Inactivo'])
        ];
    }
}
