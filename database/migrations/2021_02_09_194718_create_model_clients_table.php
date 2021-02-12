<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->enum('genero', ['masculino', 'feminino']);
            $table->integer('idade');
            $table->string('email');
            $table->string('telefone', 14);
            $table->char('cep', 9);
            $table->string('endereco');
            $table->string('cidade');
            $table->string('estado');
            $table->string('sigla', 2);
            $table->string('pais');
            $table->string('cartao', 16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
