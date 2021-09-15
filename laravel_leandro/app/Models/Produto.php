<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table="produtos";
    protected $primaryKey = "id";

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'categorias_id_categoria',
        'marcas_id'
    ];

    public function categoria(){

        return $this->belongsTo(Categoria::class, 'categorias_id_categoria');
    }

    public function marca(){

        return $this->belongsTo(Marca::class, 'marcas_id');
    }
}
