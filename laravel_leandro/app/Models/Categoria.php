<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    
    protected $primaryKey = "id_categoria";

    protected $fillable = [
        'categoria'
    ];

    public function produtos(){
        return $this->hasMany(Produto::class, 'categorias_id_categoria');
    }
}
