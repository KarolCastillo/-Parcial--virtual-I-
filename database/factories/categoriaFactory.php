<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\categoria;

class categoriaFactory extends Factory
{

    protected $model = categoria::class;
    public function definition()
    {
        return [
            'id_categoria' =>$this->faker->unique()->numberBetween(100, 200),
            'descripcion' =>$this->faker->citysuffix,
        ];
    }
}
