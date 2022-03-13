<?php

namespace Database\Seeders;
use App\Models\alumno;
Use App\Models\categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Se desactiva la orden de constraints de fk
        Schema::disableForeignKeyConstraints();
        //llamamos a los modelos
        categoria::truncate();
        alumno::truncate();
        Schema::enableForeignKeyConstraints(); //Se activa nuevamente la orden de las fk

        //Llamamos a los seeder de cada tabla
        $this->call(categoriaSeeder::class);
        $this->call(alumnoSeeder::class);
    }
}
