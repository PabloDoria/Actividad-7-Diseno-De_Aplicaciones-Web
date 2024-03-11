<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Administrador;
use App\Models\Profesor;
use App\Models\Alumno;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Crear un usuario Admon
        Usuario::create([
            'nombre' => 'Admon',
            'correo' => 'admon@robotics.com',
            'contrasena' => bcrypt('Adm@2022'),
        ]);

        // Crear un administrador con rol Director General
        Administrador::create([
            'rol' => 'Director General',
            'FK_IdTipoUsuario' => 1, // Ajusta según tus necesidades
        ]);

        // Crear un usuario Tecmilenio
        Usuario::create([
            'nombre' => 'Tecmilenio',
            'correo' => 'tecmilenio@robotics.com',
            'contrasena' => bcrypt('Adm@2022'),
        ]);

        // Crear un profesor con fecha de nacimiento y título profesional
        Profesor::create([
            'fecha_de_nacimiento' => '2002-07-18',
            'FK_IdTipoUsuario' => 2, // Ajusta según tus necesidades
        ]);

        // Crear un usuario Estudiante
        Usuario::create([
            'nombre' => 'Estudiante',
            'correo' => 'estudiante@robotics.com',
            'contrasena' => bcrypt('Adm@2002'),
        ]);

        // Crear un alumno con grado 1B
        Alumno::create([
            'grado' => '1B',
            'FK_TipoUsuario' => 3, // Ajusta según tus necesidades
        ]);
    }
}
