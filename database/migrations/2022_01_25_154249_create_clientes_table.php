<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',255);
            $table->text('direccion',250);
            $table->string('celular',9);
            $table->string('num_doc',15);
            $table->enum('estado',['1', '0'])->default('1');

            $table->unsignedBigInteger('tipo_cliente_id');
            $table->foreign('tipo_cliente_id')->references('id')->on('tipo_clientes');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
