<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CatEmpleadoController;
use App\Http\Controllers\CatEmpleoController;
use App\Http\Controllers\CatEstatuController;
use App\Http\Controllers\CatProductoController;
use App\Http\Controllers\EmpleadosProyectoController;
use App\Http\Controllers\GastosProyectoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectoController;
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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::middleware([auth::class])->group(function () {
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/cat-estatus', CatEstatuController::class);
    Route::resource('/empleado', CatEmpleadoController::class);
    Route::resource('/producto', CatProductoController::class);
    Route::resource('/empleo', CatEmpleoController::class);
    Route::resource('/proyecto', ProyectoController::class);
    Route::resource('/gasto', GastosProyectoController::class);
    Route::resource('/empleado-proyecto', EmpleadosProyectoController::class);
    Route::get('/usuario', [RegisterController::class,'index'])->name('usuario.index');
    Route::get('/usuario/{usuario}', [RegisterController::class,'show'])->name('usuario.show');
    Route::get('/usuario/{usuario}/edit', [RegisterController::class,'edit'])->name('usuario.edit');
    Route::put('/usuario/{usuario}', [RegisterController::class,'update'])->name('usuario.update');
    
});

