<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombres' => 'Jose',
            'apellido_paterno' => 'Suarez',
            'apellido_materno' => 'Hernandez',
            'rfc' => 'ASDSMAD1231',
            'curp'=> 'ASDPO213ASF',
            'fecha_nacimiento' => '01011988',
            'telefono' => 54548796,
            'grado' => 'Maestro',
            'email' => 'correo@correo.con.mx',
            'usuario' => 'usuario',
            'password' => bcrypt(123)

        ]);
        DB::table('salons')->insert([
            'sede'=> 'Salon 123',
            'capacidad' => 22,
            'ubicacion' => 'FI',
            'sigla' => 'S123'

        ]);

        DB::table('coordinacions')->insert([
            'nombre_coordinacion' => 'Coordinacion 1',
            'abreviatura' => 'C1',
            'coordinador' => 'Diego Alberto Gomez',
            'comentarios' => 'Comentarios'
        ]);

        DB::table('coordinacions')->insert([
            'nombre_coordinacion' => 'Coordinacion 2',
            'abreviatura' => 'C2',
            'coordinador' => 'Alan Rodriguez Ramirez',
            'comentarios' => 'Comentarios'
        ]);

        DB::table('divisions')->insert([
            'nombre' => 'Division 1',

        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Ingenieria electrica',
            'clave' => 1231,
            'id_division' => 1,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Administracion',
            'clave' => 1231,
            'id_division' => 1,
        ]);

        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de ingenieria'
        ]);
        
        DB::table('profesors')->insert([
            'nombres' => 'Juan',
            'apellido_paterno' => 'Ramirez',
            'apellido_materno' => 'Gonzales',
            'rfc' => 'ASD642ASDSA',
            'curp' =>'ASDAS323asd',
            'fecha_nacimiento' => '01011970',
            'telefono' => '55664487',
            'grado' => 'Maestro',
            'email' => 'prof@gmail.com',
            'estudios' => 'Maestro',
            'area' => 'Ingenieria',
            'comentarios' => 'Comentarios0',
            'genero' => 'masculino',
            'tutor' => 'true',
            'semblanza_corta' => 'Semblanza corta',
            'facebook' => 'face',
            'unam' => true,
            'facultad_id' =>1,
            'carrera_id' =>1,

        ]);

    }
}
