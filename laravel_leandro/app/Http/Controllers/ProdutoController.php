<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Http\Requests\ProdutoStore;
use App\Http\Requests\ProdutoUpdate;

class ProdutoController extends Controller
{
    public function index(){
        return view('produto', [
            'produtos' => Produto::all()
        ]);
    }

    public function create(){
        return view('frmProduto');
    }

    public function store(ProdutoStore $request){

        Produto::create( $request->validated());
        return redirect()->route('produto.index');
    }

    public function edit($id){
        $produto = Produto::findOrFail($id);
        return view('frmProduto',[
            'produto'=>$produto
        ]);
    }

    public function update($id,ProdutoUpdate $request){
        $prod = Produto::findOrFail($id);
        $prod->update($request->validated());
        return redirect()->route('produto.index');
    }
}
