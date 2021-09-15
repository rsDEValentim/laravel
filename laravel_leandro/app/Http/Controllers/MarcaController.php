<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Http\Requests\MarcaStore;
use App\Http\Requests\MarcaUpdate;


class MarcaController extends Controller
{
    public function index(){
        return view('marca', [
            'marcas' => Marca::all()
        ]);
    }  

    public function create(){
        return view('frmMarca');
    }

    public function store(MarcaStore $request){

        Marca::create( $request->validated());
        return redirect()->route('marca.index');
    }

    public function edit($id){
        $marca = Marca::findOrFail($id);
        return view('frmMarca',[
            'marca'=>$marca
        ]);
    }

    public function update($id,MarcaUpdate $request){
        $mac = Marca::findOrFail($id);
        $mac->update($request->validated());
        return redirect()->route('marca.index');
    }
}
