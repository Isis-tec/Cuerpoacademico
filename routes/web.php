<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AsistenteController;

Route::get('/asistentes/create', [AsistenteController::class, 'create'])
     ->name('asistentes.create');


use App\Models\Institucion;
use App\Models\Clave;

Route::get('/asistencia', function () {
    $instituciones = Institucion::all();
    $claves = Clave::all();

    return view('asistencia', compact('instituciones', 'claves'));
});

use App\Http\Controllers\AsistenciaController;

Route::get('/asistencia', [AsistenciaController::class, 'index']);
Route::post('/asistencia', [AsistenciaController::class, 'store']);

use App\Http\Controllers\PrototipoController;

Route::resource('prototipos', PrototipoController::class);

