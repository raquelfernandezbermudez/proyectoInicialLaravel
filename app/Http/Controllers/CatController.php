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
    
}

