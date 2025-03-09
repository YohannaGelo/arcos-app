<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arco;
use Illuminate\Support\Facades\Auth;

class ArcoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arcos = Arco::all(); // Obtiene todos los arcos de la base de datos
        return view('arcos.index', compact('arcos')); // Pasa los arcos a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Verificar si el usuario tiene permiso para crear arcos
        $this->authorize('create', Arco::class);

        return view('arcos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Verificar si el usuario tiene permiso para crear arcos
        $this->authorize('create', Arco::class);

        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tipo' => 'required|string|max:255',
            'imagen' => 'nullable|url', // Validar que sea una URL válida
            'curiosidad' => 'nullable|string',
            'imagen_curiosidad' => 'nullable|url', // Validar que sea una URL válida
        ]);

        // Crear un nuevo arco en la base de datos
        Arco::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'tipo' => $request->tipo,
            'imagen' => $request->imagen, // URL de la imagen principal
            'curiosidad' => $request->curiosidad,
            'imagen_curiosidad' => $request->imagen_curiosidad, // URL de la imagen de curiosidad
        ]);

        // Volver a la vista con mensaje
        return redirect()->route('arcos.index')->with('success', 'Arco creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $arco = Arco::findOrFail($id); // Busca el arco por su ID
        return view('arcos.show', compact('arco'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $arco = Arco::findOrFail($id); // Busca el arco por su ID

        // Verificar si el usuario tiene permiso para editar arcos
        $this->authorize('update', $arco);

        return view('arcos.edit', compact('arco'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $arco = Arco::findOrFail($id); // Busca el arco por su ID

        // Verificar si el usuario tiene permiso para editar arcos
        $this->authorize('update', $arco);

        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tipo' => 'required|string|max:255',
            'imagen' => 'nullable|url', // Validar que sea una URL válida
            'curiosidad' => 'nullable|string',
            'imagen_curiosidad' => 'nullable|url', // Validar que sea una URL válida
        ]);

        // Actualizar los campos
        $arco->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'tipo' => $request->tipo,
            'imagen' => $request->imagen, // URL de la imagen principal
            'curiosidad' => $request->curiosidad,
            'imagen_curiosidad' => $request->imagen_curiosidad, // URL de la imagen de curiosidad
        ]);

        // Redirigir a la lista de arcos con un mensaje de éxito
        return redirect()->route('arcos.index')->with('success', 'Arco actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $arco = Arco::findOrFail($id); // Busca el arco por su ID

        // Verificar si el usuario tiene permiso para eliminar arcos
        $this->authorize('delete', $arco);

        // Eliminar el arco de la base de datos
        $arco->delete();

        // Volver a la lista con mensaje
        return redirect()->route('arcos.index')->with('success', 'Arco eliminado correctamente.');
    }
}