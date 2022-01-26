<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class b_UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
        'nombres' => 'asdasdasd',
        'apellidos' =>'asdasdasd',
        'celular' =>'987456311',
        'direccion' =>'123123123qe',
        'user' =>'cpps',
        'password' => bcrypt('123'),
        'estado' =>'1'
        ]);
        Usuario::create([
            'nombres' => 'asdas123dasd',
            'apellidos' =>'asdas123dasd',
            'celular' =>'987456313',
            'direccion' =>'12312323qe',
            'user' =>'cpps3',
            'password' => bcrypt('123'),
            'estado' =>'1'
        ]);
        Usuario::create([
            'nombres' => 'asdasd43asd',
            'apellidos' =>'asda43sdasd',
            'celular' =>'987456312',
            'direccion' =>'123123zxc123qe',
            'user' =>'cpps4',
            'password' => bcrypt('123'),
            'estado' =>'1'
        ]);
        Usuario::create([
            'nombres' => 'asdasd65asd',
            'apellidos' =>'asda54sdasd',
            'celular' =>'987456316',
            'direccion' =>'123123124czxc3qe',
            'user' =>'cpps5',
            'password' => bcrypt('123'),
            'estado' =>'1'
        ]);
    }
    
}
