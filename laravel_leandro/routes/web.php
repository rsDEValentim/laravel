<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/produto/new', [ProdutoController::class,'create'])->name('produto.new');

Route::post('/produto/update/{id}', [ProdutoController::class,'update'])->name('produto.update');

Route::get('/produto/edit/{id}', [ProdutoController::class,'edit'])->name('produto.edit');

Route::get('/produto', [ProdutoController::class,'index'])->name('produto.index');

Route::post('/produto', [ProdutoController::class,'store'])->name('produto.store');

Route::post('/save',[FormController::class, 'save']);


// categorias

Route::get('/categoria', [CategoriaController::class,'index'])->name('categoria.index'); // lista as categorias

Route::get('/categoria/new', [CategoriaController::class,'create'])->name('categoria.new'); // retorna a view de formulario

Route::post('/categoria', [CategoriaController::class,'store'])->name('categoria.store'); //rota que vai receber os dados do formulario

Route::get('/categoria/edit/{id}', [CategoriaController::class,'edit'])->name('categoria.edit');

Route::post('/categoria/update/{id}', [CategoriaController::class,'update'])->name('categoria.update');


//marcas

Route::get('/marca', [MarcaController::class,'index'])->name('marca.index');

Route::get('/marca/new', [MarcaController::class,'create'])->name('marca.new');

Route::post('/marca', [MarcaController::class,'store'])->name('marca.store');

Route::get('/marca/edit/{id}', [MarcaController::class,'edit'])->name('marca.edit');

Route::post('/marca/update/{id}', [MarcaController::class,'update'])->name('marca.update');






