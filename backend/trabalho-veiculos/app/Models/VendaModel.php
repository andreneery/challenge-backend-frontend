<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendaModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cliente_id',
        'veiculo_id',
        'valor_compra',
        'data_compra',
    ];
}
