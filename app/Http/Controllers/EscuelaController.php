<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escuela;


class EscuelaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        $escuelas = Escuela::when($search, function ($query, $search) {
            return $query->where('nombre', 'LIKE', "%$search%");
        })->paginate(10);
    
        return view('escuelas.index', compact('escuelas'));
    }

    public function create()
    {
        // Muestra el formulario para crear una nueva escuela
        return view('escuelas.create');
    }

    public function store(Request $request)
    {
        // Guarda una nueva escuela
        $escuela = Escuela::create($request->all());

        if ($request->file('logotipo')) {
            $logotipoPath = $request->file('logotipo')->store('public/escuelas');
            $escuela->logotipo = $logotipoPath;
            $escuela->save();
        }

        return redirect()->route('escuelas.index')->with('success', 'Escuela creada correctamente');
    }

    public function show($id)
    {
        // Devuelve una escuela específica
        $escuela = Escuela::findOrFail($id);

        return view('escuelas.show', compact('escuela'));
    }

    public function edit($id)
    {
        // Muestra el formulario para editar una escuela específica
        $escuela = Escuela::findOrFail($id);

        return view('escuelas.edit', compact('escuela'));
    }

    public function update(Request $request, $id)
    {
        // Actualiza una escuela específica
        $escuela = Escuela::findOrFail($id);
        $escuela->update($request->all());

        if ($request->file('logotipo')) {
            $logotipoPath = $request->file('logotipo')->store('public/escuelas');
            $escuela->logotipo = $logotipoPath;
            $escuela->save();
        }

        return redirect()->route('escuelas.index')->with('success', 'Escuela actualizada correctamente');
    }

    public function destroy($id)
    {
        // Elimina una escuela específica
        $escuela = Escuela::findOrFail($id);
        $escuela->delete();

        return redirect()->route('escuelas.index')->with('success', 'Escuela eliminada correctamente');
    }
}