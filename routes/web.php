<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

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

Route::get('alumnos', [AlumnosController::class, 'index'])
->name('alumnos.index');
//Create - Formulario de creacion
Route::get('/alumnos/create', [AlumnosController::class, 'create'])
->name('alumnos.create');
//Store - Almacenar un nuevo registro
Route::post('/alumnos', [AlumnosController::class, 'store'])
->name('alumnos.store');
//Edit - Formulario de Edicion
//localhost:8000/alumnos/5/edit
Route::get('/alumnos/{id}/edit', [AlumnosController::class, 'edit'])
->name('alumnos.edit');
//Creamos la opcion PUT
Route::put('/alumnos/{id}', [AlumnosController::class, 'update'])
->name(('alumnos.update'));