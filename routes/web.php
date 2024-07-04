<?php

use App\Http\Controllers\AerolineaController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\PilotoController;
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
Route::get('/', [GlobalController::class, 'index'])->name('aeropuerto.index');

Route::get('/pilotos', [PilotoController::class, 'index'])->name('pilotos.Pindex');

Route::get('/pilotos/create', [PilotoController::class, 'create'])->name('pilotos.create');

Route::post('/pilotos/store', [PilotoController::class, 'store'])->name('pilotos.store');

 Route::get('/pilotos/updateForm/{id}', [PilotoController::class, 'updateForm'])->name('pilotos.updateForm');

//Route::get('/updateForm/{id}', function ($id) {
//    return view('updateForm', ['id' => $id]);
//})->name('pilotos.updateForm');


Route::put('/pilotos/update/{id}', [PilotoController::class, 'update'])->name('pilotos.update');

Route::delete('/pilotos/delete/{id}', [PilotoController::class, 'delete'])->name('pilotos.delete');



Route::get('/aerolineas', [AerolineaController::class, 'index'])->name('aerolineas.index');

Route::get('/aerolineas/create', [AerolineaController::class, 'create'])->name('aerolineas.create');

Route::post('/aerolineas/store', [AerolineaController::class, 'store'])->name('aerolineas.store');

Route::get('/aerolineas/updateForm/{id}', [AerolineaController::class, 'updateForm'])->name('aerolineas.updateForm');

Route::put('/aerolineas/update/{id}', [AerolineaController::class, 'update'])->name('aerolineas.update');

Route::delete('/aerolineas/delete/{id}', [AerolineaController::class, 'delete'])->name('aerolineas.delete');
