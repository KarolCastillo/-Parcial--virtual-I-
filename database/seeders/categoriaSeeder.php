<?php

namespace Database\Seeders;
use App\Models\categoria;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('categoria')->insert([
            'id_categoria' => '1',
            'descripcion' => 'EXCELENTE'
        ]);

        DB::table('categoria')->insert([
            'id_categoria' => '2',
            'descripcion' => 'BUENO'
        ]);

        DB::table('categoria')->insert([
            'id_categoria' => '3',
            'descripcion' => 'REGULAR'
        ]);*/
        categoria::factory(100)->create();
    }
}
