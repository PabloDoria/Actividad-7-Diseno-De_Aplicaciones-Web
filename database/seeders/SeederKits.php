<?php

use Illuminate\Database\Seeder;
use App\Models\Kit;

class KitSeeder extends Seeder
{
    public function run()
    {
        // Crear un kit con clave StarterKit y contenido Introduction to Robotics
        Kit::create([
            'clave' => 'StarterKit',
            'contenido' => 'Introduction to Robotics',
        ]);

        // Crear un kit con clave Educational Robotics Kit y contenido Introduction to Automation
        Kit::create([
            'clave' => 'Educational Robotics Kit',
            'contenido' => 'Introduction to Automation',
        ]);

        // Crear un kit con Clave Kit5 y contenido Characteristics of a Robot
        Kit::create([
            'clave' => 'Kit5',
            'contenido' => 'Characteristics of a Robot',
        ]);
    }
}
