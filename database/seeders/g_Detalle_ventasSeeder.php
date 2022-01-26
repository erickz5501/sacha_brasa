<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Detalle_venta;

class g_Detalle_ventasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detalle_venta::create([
        'precio_venta' => 400,
        'cantidad' => 4,
        'ventas_id' => 1,
        'productos_id' => 3
        ]);   
        Detalle_venta::create([
            'precio_venta' => 200,
            'cantidad' => 4,
            'ventas_id' => 3,
            'productos_id' => 2
        ]);    
        Detalle_venta::create([
            'precio_venta' => 400,
            'cantidad' => 4,
            'ventas_id' => 2,
            'productos_id' => 1
        ]);    

    }
}
