<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Http\Requests\ProdutoStore;
use App\Http\Requests\ProdutoUpdate;
use App\Models\Categoria;
use App\Models\Marca;

class ProdutoController extends Controller
{
    public function index(){
        return view('produto', [
            'produtos' => Produto::with('categoria')->get(),
            'produtos' => Produto::with('marca')->get()
        ]);
    }

    public function create(){
        return view('frmProduto', [
            'categorias' => Categoria::all(),
            'marcas' => Marca::all()

        ]);
    }

    public function store(ProdutoStore $request){

        Produto::create( $request->validated());
        return redirect()->route('produto.index');
    }

    public function edit($id){
        $produto = Produto::findOrFail($id);
        return view('frmProduto',[
            'produto'=>$produto,
            'categorias' => Categoria::all(),
            'marcas' => Marca::all()
        ]);
    }

    public function update($id,ProdutoUpdate $request){
        $prod = Produto::findOrFail($id);
        $prod->update($request->validated());
        return redirect()->route('produto.index');
    }
}
