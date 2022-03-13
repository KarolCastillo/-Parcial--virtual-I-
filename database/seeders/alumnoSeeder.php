<?php

namespace Database\Seeders;
use App\Models\alumno;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;

class alumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $foto = ('foto/OPRdCCGb6A9nMhoWwQVpy221wDyydzaIsPcSveOx.jpg');
        //$foto1 = ('foto/DMfq07L5Q6qGtBXQVOn1BTGdIwVrGnnUiHHsKkA1.jpg');
        //$foto2 = ('foto/28TdRNmsIzR58w5LHziHZJE5iyKawgKVzm6pq9B5.jpg');

        /*DB::table('alumno')->insert([
            'carne' => '10020',
            'nombre' => 'Karol Castillo',
            'alias' => 'Cas',
            'foto' =>$foto,
            'correo' => 'karolvalled@gmail.com',
            'fecha_nacimiento' => '2002-08-13',
            'telefono' => '47423195',
            'id_categoria' => '1'
        ]);

        DB::table('alumno')->insert([
            'carne' => '10023',
            'nombre' => 'Lesly Castillo',
            'alias' => 'Les',
            'foto' =>$foto1,
            'correo' => 'Lesmacar@gmail.com',
            'fecha_nacimiento' => '2002-03-31',
            'telefono' => '55576505',
            'id_categoria' => '2'
        ]);

        DB::table('alumno')->insert([
            'carne' => '10026',
            'nombre' => 'Danissa Villatoro',
            'alias' => 'Tashi',
            'foto' =>$foto2,
            'correo' => 'tashi@gmail.com',
            'fecha_nacimiento' => '2002-04-04',
            'telefono' => '47338935',
            'id_categoria' => '3'
        ]);*/
        alumno::factory(1000)->create();
    }
}
