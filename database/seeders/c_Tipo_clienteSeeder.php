<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo_cliente;

class c_Tipo_clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.s
     *
     * @return void
     */
    public function run()
    {
        Tipo_cliente::create([
            'nombre'=> 'Persona Juridica'
        ]);
        Tipo_cliente::create([
            'nombre'=> 'Persona Natural'
        ]);
    }
}
