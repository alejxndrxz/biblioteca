<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\LibrosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AuthController::class,'loginForm'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.store');
Route::post('/register',[AuthController::class,'register'])->name('register');
#agrupa rutas con auth
Route::middleware('auth')->group(function () {
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout'); 

# Rutas para categorías
Route::get('/categorias', [CategoriasController::class, 'index'])->name('categorias.index');
Route::get('/categorias/create', [CategoriasController::class, 'create'])->name('categorias.create');
Route::post('/categorias/store', [CategoriasController::class, 'store'])->name('categorias.store');

Route::get('/categorias/{id}/edit', [CategoriasController::class, 'edit'])->name('categorias.edit');
Route::put('/categorias/{id}', [CategoriasController::class, 'update'])->name('categorias.update');
Route::delete('/categorias/{id}', [CategoriasController::class, 'destroy'])->name('categorias.destroy');

# Rutas para libros
Route::get('/libros', [LibrosController::class, 'index'])->name('libros.index');
Route::get('/libros/create', [LibrosController::class, 'create'])->name('libros.create');
Route::post('/libros', [LibrosController::class, 'store'])->name('libros.store');
Route::get('/libros/{id}/edit', [LibrosController::class, 'edit'])->name('libros.edit');
Route::put('/libros/{id}', [LibrosController::class, 'update'])->name('libros.update');
Route::delete('/libros/{id}', [LibrosController::class, 'destroy'])->name('libros.destroy');

});

