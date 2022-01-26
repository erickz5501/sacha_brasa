<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Venta;
class e_VentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Venta::create([
            'total_venta' => 40,
            'change' => 10,
            'cantidad' => 2,
            'cash' => 50,
            'nro_mesa' =>'5',
            'estado' =>'1',
            'usuarios_id' => 3,
            'cliente_id' => 1
            ]);
        Venta::create([
            'total_venta' => 150,
            'change' => 0,
            'cantidad' => 3,
            'cash' => 150,
            'nro_mesa' =>'2',
            'estado' =>'1',
            'usuarios_id' => 4,
            'cliente_id' => 1
            ]);
        Venta::create([
            'total_venta' => 50,
            'change' => 0,
            'cantidad' => 2,
            'cash' => 50,
            'nro_mesa' =>'2',
            'estado' =>'1',
            'usuarios_id' => 1,
            'cliente_id' => 1
            ]);
    }
}
