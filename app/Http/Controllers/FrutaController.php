<?php

namespace App\Http\Controllers;

use App\Models\Fruta;
use Illuminate\Http\Request;

class FrutaController extends Controller
{
    
    public function index(){
        return view('frutas.insertar');
    }
    
    public function insertar(Request $request)
    {
        $frutas = new Fruta();
        $frutas->nombre = $request->nombre;
        $frutas->precio = $request->precio;
        $frutas->cantidad = $request->cantidad;
        $frutas->save();
        return view('frutas.insertar');
    }

    public function obtener(){
        $frutas = Fruta::all();
        return view('frutas.obtener', compact('frutas'));
    }

}
