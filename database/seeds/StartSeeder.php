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
        /*DB::table('users')->insert([
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
        ]);*/
        
        
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Ingeniería'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Arquitectura'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Artes y Diseño'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Ciencias'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Ciencias Políticas y Sociales'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Contaduría y Administración'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Derecho'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Economía'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Estudios Superiores (FES) Acatlán'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Estudios Superiores (FES) Aragón'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Estudios Superiores (FES) Cuautitlán'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Estudios Superiores (FES) Iztacala'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Estudios Superiores (FES) Zaragoza'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Filosofía y Letras'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Medicina'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Medicina Veterinaria y Zootecnia'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Música'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Odontología'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Psicología'
        ]);
        DB:: table('facultads')->insert([
            'nombre' =>'Facultad de Química'
        ]);
        DB::table('categoria_nivel')->insert(['categoria' => 'Administrativo', 'abreviatura' => 'Adm']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Ayudante de profesor A', 'abreviatura' => 'AYTE PROF A']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Ayudante de profesor B', 'abreviatura' => 'AYTE PROF B']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Funcionario', 'abreviatura' => 'FUNC']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Investigador Asociado B TC', 'abreviatura' => 'INV ASOC B TC']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Investigador titular A TC', 'abreviatura' => 'INV TIT A T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Investigador titular B MT', 'abreviatura' => 'INV TIT B M  T']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Investigador titular B TC', 'abreviatura' => 'INV TIT B T  C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Investigador titular C MT', 'abreviatura' => 'INV TIT C M  T']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Investigador titular C TC', 'abreviatura' => 'INV TIT C T  C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Profesor Emérito', 'abreviatura' => 'PROF EMERITO']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Profesor Titular A TC', 'abreviatura' => 'PROF TIT A T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Profesor Titular A TC', 'abreviatura' => 'PROF TIT B T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Profesor Titular A TC', 'abreviatura' => 'PROF TIT C T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Asociado A TC', 'abreviatura' => 'TEC ASOC A T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Asociado B TC', 'abreviatura' => 'TEC ASOC B T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Asociado C TC', 'abreviatura' => 'TEC ASOC C T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Auxiliar A TC', 'abreviatura' => 'TEC AUX A T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Auxiliar B MT', 'abreviatura' => 'TEC AUX B M T']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Auxiliar B TC', 'abreviatura' => 'TEC AUX B T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Auxiliar C TC', 'abreviatura' => 'TEC AUX C T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Titular A TC', 'abreviatura' => 'TEC TIT A T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Titular B TC', 'abreviatura' => 'TEC TIT B T C']);
        DB::table('categoria_nivel')->insert(['categoria' => 'Técnico Titular C TC', 'abreviatura' => 'TEC TIT C T C']);
        /*  
        DB::table('categoria_nivel')->insert(['categoria' => '', 'abreviatura' => '']);

        
        
        
        

        DB::table('profesors')->insert([
            'nombres' => 'Juan',
            'apellido_paterno' => 'Ramirez',
            'apellido_materno' => 'Gonzales',
            'rfc' => 'ASD642ASDSA',
            'curp' =>'ASDAS323asd',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1970-01-01',
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
        DB::table('profesors')->insert([
            'nombres' => 'Marta',
            'apellido_paterno' => 'Suarez',
            'apellido_materno' => 'Prados',
            'rfc' => 'MSRS125623ASD343',
            'curp' =>'MASRIPS26556',
            'categoria_nivel_id'=>1,
            'fecha_nacimiento' => '1979-01-01',
            'telefono' => '557458963',
            'grado' => 'Maestro',
            'email' => 'MSP@gmail.com',
            'estudios' => 'Maestro',
            'area' => 'Administracion',
            'comentarios' => 'Comentario',
            'genero' => 'femenino',
            'tutor' => 'true',
            'semblanza_corta' => 'Semblanza',
            'facebook' => 'MyFace',
            'unam' => true,
            'facultad_id' =>1,
            'carrera_id' =>2,

        ]);

        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Curso de programacion',
            'duracion_curso' => '10',
            'coordinacion_id' => 1,
            'tipo' => 'Actualizacion',
            'tipo_curso_diploma_instructor' => 'Tipo',
            'presentacion' => 'Presentacion',
            'tipo_difusion' =>'Tipo difusion',
            'dirigido' => 'Dirigido',
            'objetivo' => 'Objetivo',
            'contenido' => 'Contentido',
            'sintesis' => 'Sintesis',
            'metodologia' => 'Metodologia',
            'acreditacion' => 'Acreditacion',
            'evaluacion' => 'Examen',
            'bibliografia' => 'Bibliogragia',
            'antecedentes' => 'Ninguno',
            'consecuentes' =>'Ninguno',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'ADFVJ'

        ]);
        DB::table('catalogo_cursos')->insert([
            'nombre_curso' =>'Administracion',
            'duracion_curso' => '20',
            'coordinacion_id' => 1,
            'tipo' => 'Actualizacion',
            'tipo_curso_diploma_instructor' => 'Tipo',
            'presentacion' => 'Presentacion',
            'tipo_difusion' =>'Tipo difusion',
            'dirigido' => 'Dirigido',
            'objetivo' => 'Objetivo',
            'contenido' => 'Contentido',
            'sintesis' => 'Sintesis',
            'metodologia' => 'Metodologia',
            'acreditacion' => 'Acreditacion',
            'evaluacion' => 'Examen',
            'bibliografia' => 'Bibliogragia',
            'antecedentes' => 'Ninguno',
            'consecuentes' =>'Ninguno',
            'fecha_disenio' => '2018-05-18',
            'clave_curso' => 'FJHCZ'

        ]);

        DB::table('cursos')->insert([
            'semestre_imparticion' => 1,
            'fecha_inicio' => '2018-05-20',
            'fecha_fin' => '2018-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Martes',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'profesor_id' => 1,
            'costo' => 2000,
            'orden' => 'Orden',
            'fecha_disenio' => '2018-05-18',
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'status' => 'Activo',
            'catalogo_id' => 1,
            'salon_id' => 1
        ]);
        DB::table('cursos')->insert([
            'semestre_imparticion' => 1,
            'fecha_inicio' => '2018-05-20',
            'fecha_fin' => '2018-05-30',
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias_semana' => 'Lunes,Martes',
            'numero_sesiones' => 10,
            'texto_diploma' => 'Texto diploma',
            'profesor_id' => 2,
            'costo' => 2000,
            'orden' => 'Orden',
            'fecha_disenio' => '2018-05-18',
            'cupo_maximo' => 20,
            'cupo_minimo' => 5,
            'status' => 'Activo',
            'catalogo_id' => 2,
            'salon_id' => 1
        ]); */
       
    }
}
