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

Route::get('/', function () {
    return view('diseños.base');
});
//rutas de carpeta Estudiantes
route::get("/LISTADO",[\App\Http\Controllers\alumnocontroller::class,'listado']);
route::get("/CREAR",[\App\Http\Controllers\alumnocontroller::class,'estudiform']);
route::post("/GUARDAR",[\App\Http\Controllers\alumnocontroller::class,'save'])->name("save");
route::delete("/delete/{carne}",[\App\Http\Controllers\alumnocontroller::class,'delete'])->name('delete');
route::get("/EDITAR/{carne}",[\App\Http\Controllers\alumnocontroller::class,'modificar'])->name('modificar');
route::post("/edita/{carne}",[\App\Http\Controllers\alumnocontroller::class,'edit'])->name('edit');

//rutas de carpeta Grado
route::get("/LISTADO_cat",[\App\Http\Controllers\categoriacontroller::class,'listado']);
route::delete("/delete_cat/{id_categoria}",[\App\Http\Controllers\categoriacontroller::class,'delete'])->name('delete_cat');
route::get("/CREAR_cat",[\App\Http\Controllers\categoriacontroller::class,'catform']);
route::get("/GUARDAR_GRADO",[\App\Http\Controllers\categoriacontroller::class,'save'])->name("save_categoria");
