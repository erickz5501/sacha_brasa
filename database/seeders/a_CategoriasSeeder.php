<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class a_CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre'=> 'Pollo a la Brasa'
        ]);
        Categoria::create([
            'nombre'=> 'Hambuerguesa'
        ]);
        Categoria::create([
            'nombre'=> 'Alitas'
        ]);
        Categoria::create([
            'nombre'=> 'Chaufas'
        ]);
        Categoria::create([
            'nombre'=> 'Bebidas'
        ]);

    }
}
