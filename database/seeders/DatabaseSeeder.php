<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call(a_CategoriasSeeder::class);
        $this -> call(b_UsuariosSeeder::class);
        $this -> call(c_Tipo_clienteSeeder::class);
        $this -> call(d_ClientesSeeder::class);
        $this -> call(e_VentasSeeder::class);
        $this -> call(f_ProductosSeeder::class);
        $this -> call(g_Detalle_ventasSeeder::class);
        
       
    }
}
