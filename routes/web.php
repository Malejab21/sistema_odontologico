<?php

use App\Http\Controllers\InstrumentalodtController;
use App\Http\Controllers\InstrumentoController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\PacienteController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('insumos/pdf', [\App\Http\Controllers\InsumoController::class,'pdf'])->name('insumos.pdf');
    Route::get('instrumentos/pdf', [\App\Http\Controllers\InstrumentoController::class,'pdf'])->name('instrumentos.pdf');
    Route::get('pacientes/pdf', [\App\Http\Controllers\PacienteController::class,'pdf'])->name('pacientes.pdf');
    Route::resource('/pacientes', PacienteController::class);
    Route::resource('/insumos', InsumoController::class);
    Route::resource('/instrumentos', InstrumentoController::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
