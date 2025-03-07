<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat; // Importar el modelo  Cat


class CatController extends Controller
{
    public function index(){

        $cats = Cat::all(); // Obtener todos los gatos de la base de datos
        return view ("cats.index", ["cats"=>$cats]);
    }
    // Obtener todos los gatos de la base de datos

    public function create()
    {
        return view('cats.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0|max:30',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $cat = new Cat();
        $cat->name = $request->name;
        $cat->age = $request->age;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/cats'), $imageName);
            $cat->image = $imageName;
        }

        $cat->save();

        return redirect()->route('cats.index')
            ->with('success', 'Gato creado exitosamente.');
    }

    public function destroy(Cat $cat)
    {
        // Eliminar la imagen si existe
        if ($cat->image) {
            $imagePath = public_path('images/cats/' . $cat->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Eliminar el registro de la base de datos
        $cat->delete();

        return redirect()->route('cats.index')
            ->with('success', 'Gato eliminado exitosamente.');
    }

    public function update(Request $request, $id)
    {
        $cat = Cat::findOrFail($id);
        $cat->update($request->all());
        return redirect()->route('cats.index')->with('success', 'Gato actualizado con éxito.');
    }

    public function edit($id)
{
    $cat = Cat::findOrFail($id);
    return view('cats.edit', compact('cat'));
}
    
}
