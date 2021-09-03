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


