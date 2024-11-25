<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('conteudo');
            $table->integer('autor_id')->unsigned();  //Usado para iniciar a relação - criando a coluna treinador_id 
            $table->foreign('autor_id')->references('id')->on('autors'); //Relacionado a colunado as 2 colunas do "treinador"
            $table->integer('categoria_id')->unsigned();  //Usado para iniciar a relação - criando a coluna treinador_id 
            $table->foreign('categoria_id')->references('id')->on('categorias'); //Relacionado a colunado as 2 colunas do "treinador"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
