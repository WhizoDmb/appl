<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pilotos;

class PilotoController extends Controller
{
    public function index(){
        $pilotos = Pilotos::all();
        return view('pilotos',compact('pilotos'));
    }

    public function create(){
        return view('pilotosForm');
    }

    public function store(Request $request){
        $piloto = new Pilotos();
        $piloto -> Nombre = $request -> Nombre;
        $piloto -> Apaterno = $request -> Apaterno;
        $piloto -> Amaterno = $request -> Amaterno;
        $piloto -> CURP = $request -> CURP;
        $piloto -> RFC = $request -> RFC;
        $piloto->nacionalidad= $request->nacionalidad;

        $piloto -> save();

        return redirect()->route('pilotos.index');
    }
}
