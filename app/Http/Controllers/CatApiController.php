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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
