<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Requests\CategoriaStore;
use App\Http\Requests\CategoriaUpdate;

class CategoriaController extends Controller
{
    public function index(){
        return view('categoria', [
            'categorias' => Categoria::all()
        ]);
    }

    public function create(){
        return view('frmCategoria');
    }

 //categoriastore é uma FormRequest que serve para validar todas as informações inseridas pelo usuário no formulário e se cria através do comando php artisan make:request example
 
    public function store(CategoriaStore $request){

        Categoria::create( $request->validated());
        return redirect()->route('categoria.index');
    }

    public function edit($id){
        $categoria = Categoria::findOrFail($id);
        return view('frmCategoria',[
            'categoria'=>$categoria
        ]);
    }

    public function update($id,CategoriaUpdate $request){
        $categ = Categoria::findOrFail($id);
        $categ->update($request->validated());
        return redirect()->route('categoria.index');
    }
}
    