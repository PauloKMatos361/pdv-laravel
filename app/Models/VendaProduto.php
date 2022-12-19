<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendaProduto extends Model
{
    use HasFactory;

    protected $table = ['venda_produtos'];

    protected $fillable = ['id_produto', 'id_venda', 'quantidade', 'preco_unitario'];
}
