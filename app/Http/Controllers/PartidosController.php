<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partido;
use App\Models\Equipo;


class PartidosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $partidos = Partido::all();

        return view('partidos.index', compact('partidos'));
    }

    public function create(){

        $equipos = Equipo::all();

        return view('partidos.create', compact('equipos'));
    }

    public function store(Request $request){

        // validación del formulario
        $request->validate([
            'equipo1' => 'required',
            'equipo2' => 'required',
            'dia' => 'required|max:50',
            'hora' => 'required|max:50',
            'resultado' => 'max:50'
        ]);

        $partido = new Partido();

        $partido->id_equipo1 = $request->equipo1;
        $partido->id_equipo2 = $request->equipo2;
        $partido->dia = $request->dia;
        $partido->hora = $request->hora;
        $partido->resultado = $request->resultado;

        $partido->save();

        return redirect()->route('partidos');
    }

    public function show(Partido $partido){
        
        return view('partidos.show', compact('partido'));
    }

    public function edit(Partido $partido){

        return view('partidos.edit', compact('partido'));
    }

    public function update(Request $request, Partido $partido){

        // validación del formulario
        $request->validate([
            'dia' => 'required|max:50',
            'hora' => 'required|max:50',
            'resultado' => 'max:50'
        ]);

        $partido->dia = $request->dia;
        $partido->hora = $request->hora;
        $partido->resultado = $request->resultado;

        $partido->save();

        return redirect()->route('partidos', $partido);
    }

    public function destroy(Partido $partido){

        $partido->delete();
        
        return redirect()->route('partidos');
    } 
}
