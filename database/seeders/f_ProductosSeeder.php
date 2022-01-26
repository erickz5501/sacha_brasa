<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class f_ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'nombre'=> 'Pollo entero',
            'descripcion'=> 'Pollo a la brasa + papas + ensalada',
            'stock'=> 20,
            'alerta'=> 10,
            'precio' => 62,
            'categoria_id'=> 1
        ]);
        Producto::create([
            'nombre'=> '1/4',
            'descripcion'=> 'Pollo a la brasa + papas + ensalada',
            'stock'=> 20,
            'alerta'=> 10,
            'precio' => 18,
            'categoria_id'=> 1
        ]);
        Producto::create([
            'nombre'=> '1/8',
            'descripcion'=> 'Pollo a la brasa + papas + ensalada',
            'stock'=> 20,
            'alerta'=> 10,
            'precio' => 16,
            'categoria_id'=> 1
        ]);
    }
}
