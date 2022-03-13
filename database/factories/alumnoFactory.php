<?php

namespace Database\Factories;
use App\Models\alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

class alumnoFactory extends Factory
{
    protected $model = alumno::class;

    public function definition()
    {
        $foto = ('foto/OPRdCCGb6A9nMhoWwQVpy221wDyydzaIsPcSveOx.jpg');
        return [
            'carne' =>$this->faker->unique()->numberBetween(1001, 2002),
            'nombre' =>$this->faker->name,
            'alias' => $this->faker->lastName,
            'foto' =>$foto,
            'correo' => $this->faker->email,
            'fecha_nacimiento' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'telefono' =>$this->faker->tollFreePhoneNumber,
            'id_categoria' => $this->faker->numberBetween(100,200)

        ];
    }
}
