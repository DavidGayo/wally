<?php

use App\Http\Controllers\CatEmpleadoController;
use App\Http\Controllers\CatEmpleoController;
use App\Http\Controllers\CatEstatuController;
use App\Http\Controllers\CatProductoController;
use App\Http\Controllers\EmpleadosProyectoController;
use App\Http\Controllers\GastosProyectoController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/cat-estatus', CatEstatuController::class);
Route::resource('/empleado', CatEmpleadoController::class);
Route::resource('/producto', CatProductoController::class);
Route::resource('/empleo', CatEmpleoController::class);
Route::resource('/proyecto', ProyectoController::class);
Route::resource('/gasto', GastosProyectoController::class);
Route::resource('/empleado-proyecto', EmpleadosProyectoController::class);

