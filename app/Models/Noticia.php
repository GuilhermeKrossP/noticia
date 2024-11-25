<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable=[
        'titulo',
        'conteudo',
        'autor_id',
        'categoria_id'
    ];
   
    public function autor()
    {
        return $this->belongsTo(Autor::class, 'autor_id'); // Definindo que o Treinador ID é referente ao treinador, fazer essa etapa quando estiver fazendo as relações
    }
    
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id'); // Definindo que o Treinador ID é referente ao treinador, fazer essa etapa quando estiver fazendo as relações
    }
}
