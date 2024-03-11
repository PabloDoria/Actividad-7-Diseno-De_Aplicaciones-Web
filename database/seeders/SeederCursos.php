<?php

use Illuminate\Database\Seeder;
use App\Models\Curso;
use Faker\Factory as Faker;

class CursoSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            Curso::create([
                'titulo' => $faker->sentence(3),
                'contenido' => $faker->paragraph(5),
                'FK_IdProfesor' => 1, // Id del profesor fijo
                'FK_IdKit' => $faker->randomElement([1, 2, 3]), // Id del kit aleatorio entre 1, 2, 3
            ]);
        }
    }
}
