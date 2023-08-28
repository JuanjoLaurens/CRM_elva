<?php

namespace App\Http\Controllers;
use App\Models\Escuela;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        // Devuelve una lista de alumnos
        $alumnos = Alumno::paginate(10);

        return view('alumnos.index', compact('alumnos'));
    }

    public function create()
    {
        // Muestra el formulario para crear un nuevo alumno
        $escuelas = Escuela::pluck('nombre', 'id');
    
        return view('alumnos.create', compact('escuelas'));
    }

    public function store(Request $request)
    {
        // Guarda un nuevo alumno
        $alumno = Alumno::create($request->all());

        return redirect()->route('alumnos.index')->with('success', 'Alumno creado correctamente');
    }

    public function show($id)
    {
        // Devuelve un alumno específico
        $alumno = Alumno::findOrFail($id);

        return view('alumnos.show', compact('alumno'));
    }

    public function edit($id)
    {
        // Muestra el formulario para editar un alumno específico
        $alumno = Alumno::findOrFail($id);
        $escuelas = Escuela::pluck('nombre', 'id');

        return view('alumnos.edit', compact('alumno', 'escuelas'));
    }

    public function update(Request $request, $id)
    {
        // Actualiza un alumno específico
        $alumno = Alumno::findOrFail($id);
        $alumno->update($request->all());

        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado correctamente');
    }

    public function destroy($id)
    {
        // Elimina un alumno específico
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();

        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado correctamente');
    }
}
