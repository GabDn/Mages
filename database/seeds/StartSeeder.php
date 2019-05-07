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
        DB::table('divisions')->insert([
            'nombre' => 'Division 1',
        ]);
        DB::table('divisions')->insert([
            'nombre' => 'Division 2',
        ]);
        DB::table('divisions')->insert([
            'nombre' => 'Division 3',
        ]);
        DB::table('divisions')->insert([
            'nombre' => 'Division 4',
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Actuaría',
            'clave' => 101,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Arquitectura',
            'clave' => 102,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Arquitectura del paisaje',
            'clave' => 103,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ciencias de la Computación',
            'clave' => 104,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Diseño Industrial',
            'clave' => 105,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Física',
            'clave' => 106,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Civil',
            'clave' => 107,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería de minas y metalurgía',
            'clave' => 108,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Eléctrica y Eletrónica',
            'clave' => 109,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería en Computación',
            'clave' => 110,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería en Telecomunicaciones',
            'clave' => 111,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Geofísica',
            'clave' => 112,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Geológica',
            'clave' => 113,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Industrial',
            'clave' => 114,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Mecánica',
            'clave' => 115,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Mecánica Eléctrica',
            'clave' => 116,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Petrolera',
            'clave' => 117,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Química',
            'clave' => 118,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Química Metalurgia',
            'clave' => 119,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Topográfica y Geodesica',
            'clave' => 120,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Matemáticas Aplicadas y Computación',
            'clave' => 121,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Matemáticas',
            'clave' => 122,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Urbanismo',
            'clave' => 123,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Mecatrónica',
            'clave' => 124,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Geomática',
            'clave' => 125,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Tecnología',
            'clave' => 126,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ciencias de la Tierra',
            'clave' => 127,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería en Energías Renovables',
            'clave' => 128,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Nanotecnología',
            'clave' => 129,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería en Telecomunicaciones, Sistemas y Electrónica',
            'clave' => 130,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Geociencias',
            'clave' => 131,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Tecnologías para la información en ciencias',
            'clave' => 132,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ciencia de Materiales Sustentables',
            'clave' => 133,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Física Biomédica',
            'clave' => 134,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería en Sistemas Biomédicos',
            'clave' => 135,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Matemáticas Aplicadas',
            'clave' => 136,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Ambiental',
            'clave' => 137,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ciencia de Datos',
            'clave' => 138,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Biología',
            'clave' => 201,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Cirujano Dentista',
            'clave' => 202,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Enfermería y Obstetricia',
            'clave' => 203,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería Agrícola',
            'clave' => 204,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ingeniería en Alimentos',
            'clave' => 205,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Investigación Biomédica Básica',
            'clave' => 206,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Medicina Veterinaria y Zootecnia',
            'clave' => 207,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Médico Cirujano',
            'clave' => 208,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Optometría',
            'clave' => 209,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Psicología',
            'clave' => 210,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Química',
            'clave' => 211,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Química de Alimentos',
            'clave' => 212,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Química Farmacéutico Biológica',
            'clave' => 213,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Química Industrial',
            'clave' => 214,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ciencias Genómicas',
            'clave' => 215,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ciencias Ambientales',
            'clave' => 216,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Manejo Sustentable de Zonas Costeras',
            'clave' => 217,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Bioquímica Diagnóstica',
            'clave' => 218,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Farmacia',
            'clave' => 219,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Enfermería',
            'clave' => 220,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Fisioterapia',
            'clave' => 221,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Odontología',
            'clave' => 222,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ciencias Agrogenómicas',
            'clave' => 223,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ciencia Forense',
            'clave' => 224,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ecología',
            'clave' => 225,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Neurociencias',
            'clave' => 226,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Nutriología',
            'clave' => 227,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ortesis y Prótesis',
            'clave' => 228,
            'id_division' => 2,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Química e Ingeniería en Materiales',
            'clave' => 229,
            'id_division' => 2,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Administración',
            'clave' => 301,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ciencias de la Comunicación (Periodismo)',
            'clave' => 302,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Ciencias Políticas y Administración Pública',
            'clave' => 303,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Contaduría',
            'clave' => 304,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Derecho',
            'clave' => 305,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Economía',
            'clave' => 306,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Geografía',
            'clave' => 307,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Informática',
            'clave' => 308,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Planificación para el Desarrollo AGR',
            'clave' => 309,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Relaciones Internacionales',
            'clave' => 310,
            'id_division' => 3,
        ]);

        DB::table('carreras')->insert([
            'nombre' => 'Sociología',
            'clave' => 311,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Trabajo Social',
            'clave' => 312,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Economía Industrial',
            'clave' => 313,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Administración Agropecuaria',
            'clave' => 314,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Comunicación',
            'clave' => 315,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Comunicación y Periodismo',
            'clave' => 316,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Estudios Sociales y Gestión Local',
            'clave' => 317,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Desarrollo Comunitario para el Envejecimiento',
            'clave' => 318,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Antropología',
            'clave' => 319,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Desarrollo Territorial',
            'clave' => 320,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Negocios Internacionales',
            'clave' => 321,
            'id_division' => 3,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Geografía Aplicada',
            'clave' => 322,
            'id_division' => 3,
        ]);
        
        DB::table('carreras')->insert([
            'nombre' => 'Artes Visuales',
            'clave' => 401,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Bibliotecnología',
            'clave' => 402,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Canto',
            'clave' => 403,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Composición',
            'clave' => 404,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Comunicación Gráfica',
            'clave' => 405,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Diseño Gráfico',
            'clave' => 406,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Educación Musical',
            'clave' => 407,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Enseñanza de Inglés',
            'clave' => 408,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Estudios Latinoamericanos',
            'clave' => 409,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Etnomusicología',
            'clave' => 410,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Filosofía',
            'clave' => 411,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Historia',
            'clave' => 412,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Instrumentista',
            'clave' => 413,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Lengua y Literaturas Hispánicas',
            'clave' => 414,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Lengua y Lit. Modernas Alemanas',
            'clave' => 415,
            'id_division' => 1,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Lengua y Lit. Modernas Francesas',
            'clave' => 416,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Lengua y Lit. Modernas Inglesas',
            'clave' => 417,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Lengua y Lit. Modernas Italianas',
            'clave' => 418,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Letras Clásicas',
            'clave' => 419,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Literatura Dramática y Teatro',
            'clave' => 420,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Pedagogía',
            'clave' => 421,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Piano',
            'clave' => 422,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Diseño y Comunicación Visual',
            'clave' => 423,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Enseñanza de Alemán como Lengua Extranjera',
            'clave' => 424,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Enseñanza de Español como Lengua Extranjera',
            'clave' => 425,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Enseñanza de Francés como Lengua Extranjera',
            'clave' => 426,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Enseñanza de Inglés como Lengua Extranjera',
            'clave' => 427,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Enseñanza de Italiano como Lengua Extranjera',
            'clave' => 428,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Desarrollo y Gestión Interculturales',
            'clave' => 429,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Lengua y Lit. Modernas Portuguesas',
            'clave' => 430,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Geohistoria',
            'clave' => 431,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Literatura Intercultural',
            'clave' => 432,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Historia del Arte',
            'clave' => 433,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Arte y Diseño',
            'clave' => 434,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Cinematografía',
            'clave' => 435,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Teatro y Actuación',
            'clave' => 436,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Administración de Archivos y Gestión Documental',
            'clave' => 437,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Música y Tecnología Artística',
            'clave' => 438,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Lingüística Aplicada',
            'clave' => 439,
            'id_division' => 4,
        ]);
        DB::table('carreras')->insert([
            'nombre' => 'Traducción',
            'clave' => 440,
            'id_division' => 4,
        ]);


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
