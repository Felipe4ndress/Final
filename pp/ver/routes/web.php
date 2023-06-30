<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('categorias/login',[CategoriaController::class,'login'])->name('Categoria.login');
/* Route::post('categorias/login',[CategoriaController::class,'login'])->name('Categoria.home'); */
            #home
Route::get('categorias',[CategoriaController::class,'index'])->name('Categoria.index');
                        #registrar
Route::get('categorias/create',[CategoriaController::class,'create'])->name('Categoria.create');
                                                    #guardar
Route::post('categorias',[CategoriaController::class,'store'])->name('Categoria.store');
                                                    #muestra id obligatorio
Route::get('categorias/show',[CategoriaController::class,'show'])->name('Categoria.show');
Route::get('categorias/{id}/edit',[CategoriaController::class,'edit'])->name('Categoria.edit');

                                                    #editar
Route::delete('categorias/{id}',[CategoriaController::class,'destroy'])->name('Categoria.destroy');

Route::put('categorias/{id}',[CategoriaController::class,'update'])->name('Categoria.update');
/* Route::delete('categorias/{id}',[CategoriaController::class,'destroy'])->name('Categoria.destroy'); */

Route::resource('artista', ArtistaController::class)->names('artista');
/* Route::get('artista', [ArtistaController::class, 'index'])->name('artista.index');
Route::get('artista/agregar', [ArtistaController::class, 'create'])->name('artista.create');
Route::post('artista/agregar', [ArtistaController::class,'create'])->name('artista.store'); */

