<?php

namespace App\Http\Controllers;

use App\Http\Resources\CatCollection;
use App\Models\Cat;
use Illuminate\Http\Request;

/**
 * @OA\Info (
 *     title="API para consultar los gatos de mi centro de adopción",
 *      version="2.0.0",
 *      description="Esta api permite interactuar con los gatos",
 *      @OA\Contact(
 *          name="Raquel Fernández",
 *          email="rmfernandezbermudez@gmail.com",
 *      ),
 *      @OA\License(
 *          name="MIT",
 *          url="https://opensource.org/license/mit",
 *      )
 * )
*/

class CatApiController extends Controller
{

    /**
     * @OA\Get(
     *      path="/api/cats",
     *      operationId="GetCats",
     *      tags={"cats"},
     *      summary="Obtener todos los gatos",
     *      @OA\Response(
     *          response=200,
     *          description="Éxito",
     *          @OA\MediaType(
     *              mediaType="application/vnd.api+json",
     *          )
     *      )
     * )
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
        $datos = $request->input('data.attributes');
        $cat = new Cat($datos);
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
