<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Institucion;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function index()
    {
        return view('asistencia.index', [
            'instituciones' => Institucion::all(),
            'asistencias' => Asistencia::with('institucion')->get(),
        ]);
    }

    public function store(Request $request)
    {
        // Validación básica
        $request->validate([
            'nombre' => 'required|string|max:255',
            'celular' => 'required|string|max:20',
            'correo' => 'required|email',
            'institucion_id' => 'required|exists:instituciones,id',
            'clave' => 'required|string|max:50',
        ]);

        // Guardar asistencia
        Asistencia::create([
            'nombre' => $request->nombre,
            'celular' => $request->celular,
            'correo' => $request->correo,
            'institucion_id' => $request->institucion_id,
            'clave' => $request->clave,
        ]);

        return redirect()->back()->with('success', 'Asistencia registrada correctamente');
    }
}
