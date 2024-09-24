<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesionController;

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

// Route::view('/plantilla','/plantilla/layout');
// Route::view('/sesiones/crear', '/sesiones/create');
// Route::view('sesiones/listado', '/sesiones/index');

Route::get('sesiones/listado', [SesionController::class, 'index']);

Route::get('/sesiones/crear', [SesionController::class, 'create']);
Route::post('/sesiones/guardar', [SesionController::class, 'store']);

Route::get('/sesiones/editar/{pos}', [SesionController::class, 'edit']);
Route::put('/sesiones/actualizar/{pos}', [SesionController::class, 'update']);

Route::get('/sesiones/mostrar/{pos}', [SesionController::class, 'show']);
Route::delete('/sesiones/borrar/{pos}', [SesionController::class, 'destroy']);

Route::get('/sesiones/vaciar', [SesionController::class, 'vaciar']);
