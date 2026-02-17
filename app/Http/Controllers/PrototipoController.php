<?php

namespace App\Http\Controllers;

use App\Models\Prototipo;
use Illuminate\Http\Request;

class PrototipoController extends Controller
{
    public function index()
    {
        $prototipos = Prototipo::latest()->get();
        return view('prototipos.index', compact('prototipos'));
    }

    public function create()
    {
        return view('prototipo');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'autores' => 'required',
            'objetivo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'ficha_tecnica' => 'nullable'
        ]);

        if ($request->hasFile('imagen')) {
            $rutaImagen = $request->file('imagen')->store('prototipos', 'public');
        } else {
            $rutaImagen = null;
        }

        Prototipo::create([
            'nombre' => $request->nombre,
            'autores' => $request->autores,
            'objetivo' => $request->objetivo,
            'descripcion' => $request->descripcion,
            'imagen' => $rutaImagen,
            'ficha_tecnica' => $request->ficha_tecnica,
        ]);

        return redirect()->route('prototipos.index')
            ->with('success', 'Prototipo registrado correctamente');
    }

    public function edit(Prototipo $prototipo)
    {
        return view('prototipos.edit', compact('prototipo'));
    }

    public function update(Request $request, Prototipo $prototipo)
    {
        $prototipo->update($request->all());

        return redirect()->route('prototipos.index')
            ->with('success', 'Prototipo actualizado');
    }

    public function destroy(Prototipo $prototipo)
    {
        $prototipo->delete();

        return redirect()->route('prototipos.index')
            ->with('success', 'Prototipo eliminado');
    }
    public function show(Prototipo $prototipo)
{
    return view('prototipos.show', compact('prototipo'));
}


}
