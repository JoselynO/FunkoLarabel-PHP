<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre' => 'DISNEY',
        ]);

        Categoria::create([
            'nombre' => 'MARVEL',
        ]);

        Categoria::create([
            'nombre' => 'OTROS',
        ]);

        Categoria::create([
            'nombre' => 'SUPERHEROES',
        ]);

        Categoria::create([
            'nombre' => 'CARTOON',
        ]);

    }
}
