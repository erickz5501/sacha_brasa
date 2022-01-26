<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class d_ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nombre'=> 'Sergio solsol',
            'direccion'=> 'jr. lima 1223',
            'celular'=> '987456321',
            'num_doc'=> '10205052541',
            'estado' => '1',
            'tipo_cliente_id'=> 1
        ]);
        Cliente::create([
            'nombre'=> 'Sergio solsol2',
            'direccion'=> 'jr. lima 12323',
            'celular'=> '985456321',
            'num_doc'=> '77425173',
            'estado' => '1',
            'tipo_cliente_id'=> 2
        ]);
        Cliente::create([
            'nombre'=> 'Sergio solsol3',
            'direccion'=> 'jr. lima 1233',
            'celular'=> '982456321',
            'num_doc'=> '10405052541',
            'estado' => '1',
            'tipo_cliente_id'=> 1
        ]);
        Cliente::create([
            'nombre'=> 'Sergio solsol4',
            'direccion'=> 'jr. lima 1233',
            'celular'=> '987556331',
            'num_doc'=> '77425176',
            'estado' => '1',
            'tipo_cliente_id'=> 2
        ]);

    }
}
