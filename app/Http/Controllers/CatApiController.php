<?php

namespace App\Http\Controllers;

use App\Http\Resources\CatCollection;
use App\Models\Cat;
use Illuminate\Http\Request;

class CatApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CatCollection(Cat::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos=$request->input('data.attributes');
        $cat=new Cat($datos);
        $cat->save();
        return new CatResource($cat);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos de entrada
        $request->validate([
            'data.attributes.name' => 'required|string|max:255',
            // Agrega otras validaciones según sea necesario
        ]);
    
        // Buscar el gato por ID
        $cat = Cat::findOrFail($id);
    
        // Actualizar los datos
        $cat->update($request->input('data.attributes'));
    
        // Retornar el recurso actualizado
        return new CatResource($cat);
    }

    public function edit($id)
    {
        $cat = Cat::findOrFail($id);
        return view('cats.edit', compact('cat'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
