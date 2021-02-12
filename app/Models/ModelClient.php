<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelClient extends Model
{
    protected $table = 'client';
    protected $fillable = ['nome', 'genero', 'idade', 'email', 'telefone', 'cep', 'endereco', 'cidade', 'estado', 'sigla', 'pais', 'cartao'];
}
