<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Http\Requests\AnimalStore;
use App\Http\Requests\AnimalUpdate;



class AnimalController extends Controller
{
    public function index(){
        return view('animal', [
            'animais' => Animal::all()
        ]);
    }

    public function create(){
        return view('frmAnimal');
    }

    public function store(AnimalStore $request){

        Animal::create( $request->validated());
        return redirect()->route('animal.index');
    }

    public function edit($id){
        $animal = Animal::findOrFail($id);
        return view('frmAnimal',[
            'animal'=>$animal
        ]);
    }

    public function update($id,AnimalUpdate $request){
        $pet = Animal::findOrFail($id);
        $pet->update($request->validated());
        return redirect()->route('animal.index');
    }
}
