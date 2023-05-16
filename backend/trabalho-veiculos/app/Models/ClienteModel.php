<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome_cliente',
        'email',
        'numero_telefone',
        'endereco',
        'cpf',
        'cidade',
        'estado',
        'cep',
    ];
}
