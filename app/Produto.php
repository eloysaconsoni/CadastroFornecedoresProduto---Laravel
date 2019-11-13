<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produto";
    protected $fillable =[
        'nome',
        'qtde',
        'fornecedor_id'
    ];
}
